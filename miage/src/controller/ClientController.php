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
        $clients = $this->clientRepo->getClients();

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

            header('Location: index.php?page=client&action=read');
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

            $clientInfo = $this->clientRepo->getClientByNickname($client->getNickname());
            $id = $clientInfo[0]['id'];
            $client->setId($id);


            if (($this->clientRepo->checkPassword($client))) {

                $this->session->set('login', $client->getNickname());
                $this->session->set('id_client', $client->getId());

                header('Location: index.php?page=article&action=show');
            }

            $this->session->set('error', "Nickname or password incorrect");
        }

        require_once 'templates/login.php';
    }

    public function update()
    {
        $client = new Client;
        if (isset($_POST['newName']) and !empty($_POST['newName'])) {
            $client->setName($_POST('newName'));
        }
        if (isset($_POST['newFirstname']) and !empty($_POST['newFirstName'])) {
            $client->setFirstName($_POST('newFirstname'));
        }
        if (isset($_POST['newMail']) and !empty($_POST['newMail'])) {
            $client->setMail($_POST('newMail'));
        }

        $this->clientRepo->updateProfile($client);
    }

    public function delete()
    {
    }

    public function profile()
    {
        if (!($this->session->get('login')))
            header('Location: ?page=client&action=read');
        $client = new Client;
        $client->setNickname($_SESSION['login']);
        $userInfo = $this->clientRepo->viewProfile($client);
        require_once 'templates/profile.php';
    }

    public function close()
    {
        $this->session->stop();
        header('Location: ?page=home&action=show');
    }
}
