<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ZcDetamkpf Controller
 *
 * @property \App\Model\Table\ZcDetamkpfTable $ZcDetamkpf
 * @method \App\Model\Entity\ZcDetamkpf[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZcDetamkpfController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $zcDetamkpf = $this->paginate($this->ZcDetamkpf);

        debug($zcDetamkpf);

        $this->set(compact('zcDetamkpf'));
    }

    /**
     * View method
     *
     * @param string|null $id Zc Detamkpf id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zcDetamkpf = $this->ZcDetamkpf->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('zcDetamkpf'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zcDetamkpf = $this->ZcDetamkpf->newEmptyEntity();
        if ($this->request->is('post')) {
            $zcDetamkpf = $this->ZcDetamkpf->patchEntity($zcDetamkpf, $this->request->getData());
            if ($this->ZcDetamkpf->save($zcDetamkpf)) {
                $this->Flash->success(__('The zc detamkpf has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc detamkpf could not be saved. Please, try again.'));
        }
        $this->set(compact('zcDetamkpf'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zc Detamkpf id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zcDetamkpf = $this->ZcDetamkpf->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zcDetamkpf = $this->ZcDetamkpf->patchEntity($zcDetamkpf, $this->request->getData());
            if ($this->ZcDetamkpf->save($zcDetamkpf)) {
                $this->Flash->success(__('The zc detamkpf has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc detamkpf could not be saved. Please, try again.'));
        }
        $this->set(compact('zcDetamkpf'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zc Detamkpf id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zcDetamkpf = $this->ZcDetamkpf->get($id);
        if ($this->ZcDetamkpf->delete($zcDetamkpf)) {
            $this->Flash->success(__('The zc detamkpf has been deleted.'));
        } else {
            $this->Flash->error(__('The zc detamkpf could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
