<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersFeeds Controller
 *
 * @property \App\Model\Table\UsersFeedsTable $UsersFeeds
 */
class UsersFeedsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Feeds']
        ];
        $this->set('usersFeeds', $this->paginate($this->UsersFeeds));
        $this->set('_serialize', ['usersFeeds']);
    }

    /**
     * View method
     *
     * @param string|null $id Users Feed id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersFeed = $this->UsersFeeds->get($id, [
            'contain' => ['Users', 'Feeds']
        ]);
        $this->set('usersFeed', $usersFeed);
        $this->set('_serialize', ['usersFeed']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersFeed = $this->UsersFeeds->newEntity();
        if ($this->request->is('post')) {
            $usersFeed = $this->UsersFeeds->patchEntity($usersFeed, $this->request->data);
            if ($this->UsersFeeds->save($usersFeed)) {
                $this->Flash->success(__('The users feed has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The users feed could not be saved. Please, try again.'));
            }
        }
        $users = $this->UsersFeeds->Users->find('list', ['limit' => 200]);
        $feeds = $this->UsersFeeds->Feeds->find('list', ['limit' => 200]);
        $this->set(compact('usersFeed', 'users', 'feeds'));
        $this->set('_serialize', ['usersFeed']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Feed id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersFeed = $this->UsersFeeds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersFeed = $this->UsersFeeds->patchEntity($usersFeed, $this->request->data);
            if ($this->UsersFeeds->save($usersFeed)) {
                $this->Flash->success(__('The users feed has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The users feed could not be saved. Please, try again.'));
            }
        }
        $users = $this->UsersFeeds->Users->find('list', ['limit' => 200]);
        $feeds = $this->UsersFeeds->Feeds->find('list', ['limit' => 200]);
        $this->set(compact('usersFeed', 'users', 'feeds'));
        $this->set('_serialize', ['usersFeed']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Feed id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersFeed = $this->UsersFeeds->get($id);
        if ($this->UsersFeeds->delete($usersFeed)) {
            $this->Flash->success(__('The users feed has been deleted.'));
        } else {
            $this->Flash->error(__('The users feed could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
