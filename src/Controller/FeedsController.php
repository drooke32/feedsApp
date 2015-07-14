<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Feeds Controller
 *
 * @property \App\Model\Table\FeedsTable $Feeds
 */
class FeedsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('feeds', $this->paginate($this->Feeds));
        $this->set('_serialize', ['feeds']);
    }

    /**
     * View method
     *
     * @param string|null $id Feed id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $feed = $this->Feeds->get($id, [
            'contain' => ['Users', 'UsersFavourites']
        ]);
        $this->set('feed', $feed);
        $this->set('_serialize', ['feed']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $feed = $this->Feeds->newEntity();
        if ($this->request->is('post')) {
            $feed = $this->Feeds->patchEntity($feed, $this->request->data);
            if ($this->Feeds->save($feed)) {
                $this->Flash->success(__('The feed has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The feed could not be saved. Please, try again.'));
            }
        }
        $users = $this->Feeds->Users->find('list', ['limit' => 200]);
        $this->set(compact('feed', 'users'));
        $this->set('_serialize', ['feed']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Feed id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $feed = $this->Feeds->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feed = $this->Feeds->patchEntity($feed, $this->request->data);
            if ($this->Feeds->save($feed)) {
                $this->Flash->success(__('The feed has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The feed could not be saved. Please, try again.'));
            }
        }
        $users = $this->Feeds->Users->find('list', ['limit' => 200]);
        $this->set(compact('feed', 'users'));
        $this->set('_serialize', ['feed']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Feed id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feed = $this->Feeds->get($id);
        if ($this->Feeds->delete($feed)) {
            $this->Flash->success(__('The feed has been deleted.'));
        } else {
            $this->Flash->error(__('The feed could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
