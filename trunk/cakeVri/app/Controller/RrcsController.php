<?php
App::uses('AppController', 'Controller');
/**
 * Rrcs Controller
 *
 * @property Rrc $Rrc
 */
class RrcsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Rrc->recursive = 0;
		$this->set('rrcs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Rrc->id = $id;
		if (!$this->Rrc->exists()) {
			throw new NotFoundException(__('Invalid rrc'));
		}
		$this->set('rrc', $this->Rrc->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rrc->create();
			if ($this->Rrc->save($this->request->data)) {
				$this->Session->setFlash(__('The rrc has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rrc could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Rrc->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Rrc->id = $id;
		if (!$this->Rrc->exists()) {
			throw new NotFoundException(__('Invalid rrc'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rrc->save($this->request->data)) {
				$this->Session->setFlash(__('The rrc has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rrc could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Rrc->read(null, $id);
		}
		$clientes = $this->Rrc->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Rrc->id = $id;
		if (!$this->Rrc->exists()) {
			throw new NotFoundException(__('Invalid rrc'));
		}
		if ($this->Rrc->delete()) {
			$this->Session->setFlash(__('Rrc deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rrc was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
