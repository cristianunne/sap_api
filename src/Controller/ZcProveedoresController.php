<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ZcProveedores Controller
 *
 * @property \App\Model\Table\ZcProveedoresTable $ZcProveedores
 * @method \App\Model\Entity\ZcProveedore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZcProveedoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $zcProveedores = $this->ZcProveedores->find('all');
        debug($zcProveedores->toArray());

        $this->set(compact('zcProveedores'));
    }

    /**
     * View method
     *
     * @param string|null $id Zc Proveedore id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zcProveedore = $this->ZcProveedores->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('zcProveedore'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zcProveedore = $this->ZcProveedores->newEmptyEntity();
        if ($this->request->is('post')) {
            $zcProveedore = $this->ZcProveedores->patchEntity($zcProveedore, $this->request->getData());
            if ($this->ZcProveedores->save($zcProveedore)) {
                $this->Flash->success(__('The zc proveedore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc proveedore could not be saved. Please, try again.'));
        }
        $this->set(compact('zcProveedore'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zc Proveedore id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zcProveedore = $this->ZcProveedores->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zcProveedore = $this->ZcProveedores->patchEntity($zcProveedore, $this->request->getData());
            if ($this->ZcProveedores->save($zcProveedore)) {
                $this->Flash->success(__('The zc proveedore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc proveedore could not be saved. Please, try again.'));
        }
        $this->set(compact('zcProveedore'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zc Proveedore id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zcProveedore = $this->ZcProveedores->get($id);
        if ($this->ZcProveedores->delete($zcProveedore)) {
            $this->Flash->success(__('The zc proveedore has been deleted.'));
        } else {
            $this->Flash->error(__('The zc proveedore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
