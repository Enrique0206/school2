<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bosses Controller
 *
 * @property \App\Model\Table\BossesTable $Bosses
 *
 * @method \App\Model\Entity\Boss[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BossesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
	
	var $paginate = array('limit' =>5, 'order' => array('id'));
	
    public function index()
    {
        $bosses = $this->paginate($this->Bosses);

        $this->set(compact('bosses'));
    }

    /**
     * View method
     *
     * @param string|null $id Boss id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $boss = $this->Bosses->get($id, [
            'contain' => ['Students']
        ]);

        $this->set('boss', $boss);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $boss = $this->Bosses->newEntity();
        if ($this->request->is('post')) {
            $boss = $this->Bosses->patchEntity($boss, $this->request->getData());
            if ($this->Bosses->save($boss)) {
                $this->Flash->success(__('The boss has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The boss could not be saved. Please, try again.'));
        }
        $this->set(compact('boss'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Boss id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $boss = $this->Bosses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $boss = $this->Bosses->patchEntity($boss, $this->request->getData());
            if ($this->Bosses->save($boss)) {
                $this->Flash->success(__('The boss has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The boss could not be saved. Please, try again.'));
        }
        $this->set(compact('boss'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Boss id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $boss = $this->Bosses->get($id);
        if ($this->Bosses->delete($boss)) {
            $this->Flash->success(__('The boss has been deleted.'));
        } else {
            $this->Flash->error(__('The boss could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
