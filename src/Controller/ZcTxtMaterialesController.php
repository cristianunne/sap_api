<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ZcTxtMateriales Controller
 *
 * @property \App\Model\Table\ZcTxtMaterialesTable $ZcTxtMateriales
 * @method \App\Model\Entity\ZcTxtMateriale[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZcTxtMaterialesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $zcTxtMateriales = $this->paginate($this->ZcTxtMateriales);

        debug($zcTxtMateriales);

        $this->set(compact('zcTxtMateriales'));
    }

    /**
     * View method
     *
     * @param string|null $id Zc Txt Materiale id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zcTxtMateriale = $this->ZcTxtMateriales->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('zcTxtMateriale'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zcTxtMateriale = $this->ZcTxtMateriales->newEmptyEntity();
        if ($this->request->is('post')) {
            $zcTxtMateriale = $this->ZcTxtMateriales->patchEntity($zcTxtMateriale, $this->request->getData());
            if ($this->ZcTxtMateriales->save($zcTxtMateriale)) {
                $this->Flash->success(__('The zc txt materiale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc txt materiale could not be saved. Please, try again.'));
        }
        $this->set(compact('zcTxtMateriale'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zc Txt Materiale id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zcTxtMateriale = $this->ZcTxtMateriales->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zcTxtMateriale = $this->ZcTxtMateriales->patchEntity($zcTxtMateriale, $this->request->getData());
            if ($this->ZcTxtMateriales->save($zcTxtMateriale)) {
                $this->Flash->success(__('The zc txt materiale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zc txt materiale could not be saved. Please, try again.'));
        }
        $this->set(compact('zcTxtMateriale'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zc Txt Materiale id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zcTxtMateriale = $this->ZcTxtMateriales->get($id);
        if ($this->ZcTxtMateriales->delete($zcTxtMateriale)) {
            $this->Flash->success(__('The zc txt materiale has been deleted.'));
        } else {
            $this->Flash->error(__('The zc txt materiale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
