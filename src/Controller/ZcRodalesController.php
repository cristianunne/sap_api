<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ZcRodales Controller
 *
 * @property \App\Model\Table\ZcRodalesTable $ZcRodales
 * @method \App\Model\Entity\ZcRodale[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZcRodalesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $zcRodales = $this->paginate($this->ZcRodales);

        $this->set(compact('zcRodales'));
    }

    /**
     * View method
     *
     * @param string|null $id Zc Rodale id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zcRodale = $this->ZcRodales->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('zcRodale'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zcRodale = $this->ZcRodales->newEmptyEntity();
        if ($this->request->is('post')) {
            $zcRodale = $this->ZcRodales->patchEntity($zcRodale, $this->request->getData());
            if ($this->ZcRodales->save($zcRodale)) {
                $this->Flash->success(__('The zc rodale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc rodale could not be saved. Please, try again.'));
        }
        $this->set(compact('zcRodale'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zc Rodale id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zcRodale = $this->ZcRodales->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zcRodale = $this->ZcRodales->patchEntity($zcRodale, $this->request->getData());
            if ($this->ZcRodales->save($zcRodale)) {
                $this->Flash->success(__('The zc rodale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc rodale could not be saved. Please, try again.'));
        }
        $this->set(compact('zcRodale'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zc Rodale id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zcRodale = $this->ZcRodales->get($id);
        if ($this->ZcRodales->delete($zcRodale)) {
            $this->Flash->success(__('The zc rodale has been deleted.'));
        } else {
            $this->Flash->error(__('The zc rodale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
