<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ZcCabeceraco Controller
 *
 * @property \App\Model\Table\ZcCabeceracoTable $ZcCabeceraco
 * @method \App\Model\Entity\ZcCabeceraco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZcCabeceracoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $zcCabeceraco = $this->paginate($this->ZcCabeceraco);

        debug($zcCabeceraco);

        $this->set(compact('zcCabeceraco'));
    }

    /**
     * View method
     *
     * @param string|null $id Zc Cabeceraco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zcCabeceraco = $this->ZcCabeceraco->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('zcCabeceraco'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zcCabeceraco = $this->ZcCabeceraco->newEmptyEntity();
        if ($this->request->is('post')) {
            $zcCabeceraco = $this->ZcCabeceraco->patchEntity($zcCabeceraco, $this->request->getData());
            if ($this->ZcCabeceraco->save($zcCabeceraco)) {
                $this->Flash->success(__('The zc cabeceraco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc cabeceraco could not be saved. Please, try again.'));
        }
        $this->set(compact('zcCabeceraco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zc Cabeceraco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zcCabeceraco = $this->ZcCabeceraco->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zcCabeceraco = $this->ZcCabeceraco->patchEntity($zcCabeceraco, $this->request->getData());
            if ($this->ZcCabeceraco->save($zcCabeceraco)) {
                $this->Flash->success(__('The zc cabeceraco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc cabeceraco could not be saved. Please, try again.'));
        }
        $this->set(compact('zcCabeceraco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zc Cabeceraco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zcCabeceraco = $this->ZcCabeceraco->get($id);
        if ($this->ZcCabeceraco->delete($zcCabeceraco)) {
            $this->Flash->success(__('The zc cabeceraco has been deleted.'));
        } else {
            $this->Flash->error(__('The zc cabeceraco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
