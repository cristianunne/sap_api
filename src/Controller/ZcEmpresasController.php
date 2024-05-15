<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ZcEmpresas Controller
 *
 * @property \App\Model\Table\ZcEmpresasTable $ZcEmpresas
 * @method \App\Model\Entity\ZcEmpresa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZcEmpresasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $zcEmpresas = $this->paginate($this->ZcEmpresas);

        debug($zcEmpresas);

        $this->set(compact('zcEmpresas'));
    }

    /**
     * View method
     *
     * @param string|null $id Zc Empresa id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zcEmpresa = $this->ZcEmpresas->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('zcEmpresa'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zcEmpresa = $this->ZcEmpresas->newEmptyEntity();
        if ($this->request->is('post')) {
            $zcEmpresa = $this->ZcEmpresas->patchEntity($zcEmpresa, $this->request->getData());
            if ($this->ZcEmpresas->save($zcEmpresa)) {
                $this->Flash->success(__('The zc empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc empresa could not be saved. Please, try again.'));
        }
        $this->set(compact('zcEmpresa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zc Empresa id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zcEmpresa = $this->ZcEmpresas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zcEmpresa = $this->ZcEmpresas->patchEntity($zcEmpresa, $this->request->getData());
            if ($this->ZcEmpresas->save($zcEmpresa)) {
                $this->Flash->success(__('The zc empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc empresa could not be saved. Please, try again.'));
        }
        $this->set(compact('zcEmpresa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zc Empresa id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zcEmpresa = $this->ZcEmpresas->get($id);
        if ($this->ZcEmpresas->delete($zcEmpresa)) {
            $this->Flash->success(__('The zc empresa has been deleted.'));
        } else {
            $this->Flash->error(__('The zc empresa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
