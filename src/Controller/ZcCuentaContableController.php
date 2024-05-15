<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ZcCuentaContable Controller
 *
 * @property \App\Model\Table\ZcCuentaContableTable $ZcCuentaContable
 * @method \App\Model\Entity\ZcCuentaContable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZcCuentaContableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $zcCuentaContable = $this->paginate($this->ZcCuentaContable);

        debug($zcCuentaContable);

        $this->set(compact('zcCuentaContable'));
    }

    /**
     * View method
     *
     * @param string|null $id Zc Cuenta Contable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zcCuentaContable = $this->ZcCuentaContable->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('zcCuentaContable'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zcCuentaContable = $this->ZcCuentaContable->newEmptyEntity();
        if ($this->request->is('post')) {
            $zcCuentaContable = $this->ZcCuentaContable->patchEntity($zcCuentaContable, $this->request->getData());
            if ($this->ZcCuentaContable->save($zcCuentaContable)) {
                $this->Flash->success(__('The zc cuenta contable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc cuenta contable could not be saved. Please, try again.'));
        }
        $this->set(compact('zcCuentaContable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zc Cuenta Contable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zcCuentaContable = $this->ZcCuentaContable->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zcCuentaContable = $this->ZcCuentaContable->patchEntity($zcCuentaContable, $this->request->getData());
            if ($this->ZcCuentaContable->save($zcCuentaContable)) {
                $this->Flash->success(__('The zc cuenta contable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc cuenta contable could not be saved. Please, try again.'));
        }
        $this->set(compact('zcCuentaContable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zc Cuenta Contable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zcCuentaContable = $this->ZcCuentaContable->get($id);
        if ($this->ZcCuentaContable->delete($zcCuentaContable)) {
            $this->Flash->success(__('The zc cuenta contable has been deleted.'));
        } else {
            $this->Flash->error(__('The zc cuenta contable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
