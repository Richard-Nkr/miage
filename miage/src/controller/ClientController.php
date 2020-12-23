<?php

namespace App\controller;

use App\config\Session;
use App\repository\ClientRepository;
use App\model\Client;

class ClientController
{

    private $clientRepo;
    private $session;

    public function __construct()
    {
        if (!isset($this->clientRepo)) {
            $this->clientRepo = new ClientRepository;
        }

        if (!isset($this->session)) {
            $this->session = new Session;
        }
    }

    public function show()
    {
        $client = $this->clientRepo->getClients();

        require_once 'templates/clients.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $client = new Client;
            $client->setFirstName($_POST['firstname']);
            $client->setName($_POST['name']);
            $client->setNickname($_POST['nickname']);
            $client->setPassword($_POST['password']);
            $client->setMail($_POST['mail']);

            $this->clientRepo->createClient($client);

            header('Location: index.php?page=article&action=show');
        }

        require_once 'templates/register.php';
    }

    public function read()
    {

        if ($this->session->get('login'))
            header('Location: ?page=article&action=show');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $client = new Client;
            $client->setNickname($_POST['nickname']);
            $client->setPassword($_POST['password']);

            if (($this->clientRepo->checkPassword($client))) {

                $_SESSION['login'] = $client->getNickname();
                $_SESSION['isAdmin'] = $client->getIsAdmin();

                header('Location: ?page=client&action=show');
            }

            $this->session->set('error', "Nickname or password incorrect");
        }

        require_once 'templates/login.php';
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    public function profile()
    {
        if (!($this->session->get('nickname')))
            header('Location: ?page=article&action=show');

        require_once 'templates/profil.php';
    }

    public function close()
    {
        $this->session->stop();
        header('Location: ?page=home&action=show');
    }
}
