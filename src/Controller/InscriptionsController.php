<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Inscriptions Controller
 *
 * @property \App\Model\Table\InscriptionsTable $Inscriptions
 *
 * @method \App\Model\Entity\Inscription[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InscriptionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */	
	
	var $paginate = array('limit' =>5, 'order' => array('id'));
	
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grades', 'Students', 'Employees']
        ];
        $inscriptions = $this->paginate($this->Inscriptions);

        $this->set(compact('inscriptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Inscription id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inscription = $this->Inscriptions->get($id, [
            'contain' => ['Grades', 'Students', 'Employees']
        ]);

        $this->set('inscription', $inscription);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inscription = $this->Inscriptions->newEntity();
        if ($this->request->is('post')) {
            $inscription = $this->Inscriptions->patchEntity($inscription, $this->request->getData());
            if ($this->Inscriptions->save($inscription)) {
                $this->Flash->success(__('The inscription has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inscription could not be saved. Please, try again.'));
        }
        $grades = $this->Inscriptions->Grades->find('list', ['limit' => 200]);		
        $students = $this->Inscriptions->Students->find('list', ['limit' => 200]);
        $employees = $this->Inscriptions->Employees->find('list', ['limit' => 200]);
        $this->set(compact('inscription', 'grades', 'students', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Inscription id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inscription = $this->Inscriptions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inscription = $this->Inscriptions->patchEntity($inscription, $this->request->getData());
            if ($this->Inscriptions->save($inscription)) {
                $this->Flash->success(__('The inscription has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inscription could not be saved. Please, try again.'));
        }
        $grades = $this->Inscriptions->Grades->find('list', ['limit' => 200]);
        $students = $this->Inscriptions->Students->find('list', ['limit' => 200]);
        $employees = $this->Inscriptions->Employees->find('list', ['limit' => 200]);
        $this->set(compact('inscription', 'grades', 'students', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Inscription id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inscription = $this->Inscriptions->get($id);
        if ($this->Inscriptions->delete($inscription)) {
            $this->Flash->success(__('The inscription has been deleted.'));
        } else {
            $this->Flash->error(__('The inscription could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
