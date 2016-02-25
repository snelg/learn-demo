<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Goals Controller
 *
 * @property \App\Model\Table\GoalsTable $Goals
 */
class GoalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null|void
     */
    public function index()
    {
        $goals = $this->paginate($this->Goals);

        $this->set(compact('goals'));
        $this->set('_serialize', ['goals']);
    }

    /**
     * View method
     *
     * @param string|null $id Goal id.
     * @return \Cake\Network\Response|null|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $goal = $this->Goals->get($id, [
            'contain' => []
        ]);

        $this->set('goal', $goal);
        $this->set('_serialize', ['goal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $goal = $this->Goals->newEntity();
        if ($this->request->is('post')) {
            $goal = $this->Goals->patchEntity($goal, $this->request->data);
            if ($this->Goals->save($goal)) {
                $this->Flash->success(__('The goal has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The goal could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('goal'));
        $this->set('_serialize', ['goal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Goal id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $goal = $this->Goals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $goal = $this->Goals->patchEntity($goal, $this->request->data);
            if ($this->Goals->save($goal)) {
                if (!$this->request->is('ajax')) {
                    $this->Flash->success(__('The goal has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
            } else {
                $message = __('The goal could not be saved. Please, try again.');
                if ($this->request->is('ajax')) {
                    $this->set('error', compact('message'));
                    $this->set('_serialize', ['error']);
                    return;
                }
                $this->Flash->error($message);
            }
        }
        $this->set(compact('goal'));
        $this->set('_serialize', ['goal']);
    }

    /**
     * Complete method
     *
     * @param string|null $id Goal id.
     * @return \Cake\Network\Response|void Redirects on successful complete, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function complete($id = null)
    {
        $goal = $this->Goals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $goal = $this->Goals->patchEntity($goal, $this->request->data, ['fieldList' => 'complete']);
            if (!$this->Goals->save($goal)) {
                $this->set('error', ['message' => 'Unable to mark complete']);
                $this->set('_serialize', ['error']);
                return;
            }
        }
        $this->set(compact('goal'));
        $this->set('_serialize', ['goal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Goal id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $goal = $this->Goals->get($id);
        if ($this->Goals->delete($goal)) {
            $this->Flash->success(__('The goal has been deleted.'));
        } else {
            $this->Flash->error(__('The goal could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
