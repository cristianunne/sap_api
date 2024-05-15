<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ZcCentroCostos Controller
 *
 * @property \App\Model\Table\ZcCentroCostosTable $ZcCentroCostos
 * @method \App\Model\Entity\ZcCentroCosto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZcCentroCostosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $zcCentroCostos = $this->paginate($this->ZcCentroCostos);
        debug($zcCentroCostos);

        $this->set(compact('zcCentroCostos'));
    }

    /**
     * View method
     *
     * @param string|null $id Zc Centro Costo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zcCentroCosto = $this->ZcCentroCostos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('zcCentroCosto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zcCentroCosto = $this->ZcCentroCostos->newEmptyEntity();
        if ($this->request->is('post')) {
            $zcCentroCosto = $this->ZcCentroCostos->patchEntity($zcCentroCosto, $this->request->getData());
            if ($this->ZcCentroCostos->save($zcCentroCosto)) {
                $this->Flash->success(__('The zc centro costo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc centro costo could not be saved. Please, try again.'));
        }
        $this->set(compact('zcCentroCosto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zc Centro Costo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zcCentroCosto = $this->ZcCentroCostos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zcCentroCosto = $this->ZcCentroCostos->patchEntity($zcCentroCosto, $this->request->getData());
            if ($this->ZcCentroCostos->save($zcCentroCosto)) {
                $this->Flash->success(__('The zc centro costo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc centro costo could not be saved. Please, try again.'));
        }
        $this->set(compact('zcCentroCosto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zc Centro Costo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zcCentroCosto = $this->ZcCentroCostos->get($id);
        if ($this->ZcCentroCostos->delete($zcCentroCosto)) {
            $this->Flash->success(__('The zc centro costo has been deleted.'));
        } else {
            $this->Flash->error(__('The zc centro costo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
