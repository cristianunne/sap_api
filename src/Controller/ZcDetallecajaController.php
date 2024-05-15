<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ZcDetallecaja Controller
 *
 * @property \App\Model\Table\ZcDetallecajaTable $ZcDetallecaja
 * @method \App\Model\Entity\ZcDetallecaja[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZcDetallecajaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $zcDetallecaja = $this->paginate($this->ZcDetallecaja);

        debug($zcDetallecaja->toArray());

        $this->set(compact('zcDetallecaja'));
    }

    /**
     * View method
     *
     * @param string|null $id Zc Detallecaja id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zcDetallecaja = $this->ZcDetallecaja->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('zcDetallecaja'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zcDetallecaja = $this->ZcDetallecaja->newEmptyEntity();
        if ($this->request->is('post')) {
            $zcDetallecaja = $this->ZcDetallecaja->patchEntity($zcDetallecaja, $this->request->getData());
            if ($this->ZcDetallecaja->save($zcDetallecaja)) {
                $this->Flash->success(__('The zc detallecaja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc detallecaja could not be saved. Please, try again.'));
        }
        $this->set(compact('zcDetallecaja'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zc Detallecaja id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zcDetallecaja = $this->ZcDetallecaja->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zcDetallecaja = $this->ZcDetallecaja->patchEntity($zcDetallecaja, $this->request->getData());
            if ($this->ZcDetallecaja->save($zcDetallecaja)) {
                $this->Flash->success(__('The zc detallecaja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc detallecaja could not be saved. Please, try again.'));
        }
        $this->set(compact('zcDetallecaja'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zc Detallecaja id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zcDetallecaja = $this->ZcDetallecaja->get($id);
        if ($this->ZcDetallecaja->delete($zcDetallecaja)) {
            $this->Flash->success(__('The zc detallecaja has been deleted.'));
        } else {
            $this->Flash->error(__('The zc detallecaja could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
