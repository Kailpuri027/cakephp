<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PizzaInfo Controller
 *
 * @property \App\Model\Table\PizzaInfoTable $PizzaInfo
 */
class PizzaInfoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('pizzaInfo', $this->paginate($this->PizzaInfo));
        $this->set('_serialize', ['pizzaInfo']);
    }

    /**
     * View method
     *
     * @param string|null $id Pizza Info id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pizzaInfo = $this->PizzaInfo->get($id, [
            'contain' => []
        ]);
        $this->set('pizzaInfo', $pizzaInfo);
        $this->set('_serialize', ['pizzaInfo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pizzaInfo = $this->PizzaInfo->newEntity();
        if ($this->request->is('post')) {
            $pizzaInfo = $this->PizzaInfo->patchEntity($pizzaInfo, $this->request->data);
            if ($this->PizzaInfo->save($pizzaInfo)) {
                $this->Flash->success(__('The pizza info has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pizza info could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pizzaInfo'));
        $this->set('_serialize', ['pizzaInfo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pizza Info id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pizzaInfo = $this->PizzaInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pizzaInfo = $this->PizzaInfo->patchEntity($pizzaInfo, $this->request->data);
            if ($this->PizzaInfo->save($pizzaInfo)) {
                $this->Flash->success(__('The pizza info has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pizza info could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pizzaInfo'));
        $this->set('_serialize', ['pizzaInfo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pizza Info id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pizzaInfo = $this->PizzaInfo->get($id);
        if ($this->PizzaInfo->delete($pizzaInfo)) {
            $this->Flash->success(__('The pizza info has been deleted.'));
        } else {
            $this->Flash->error(__('The pizza info could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
