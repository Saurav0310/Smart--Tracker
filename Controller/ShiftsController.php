<?php
App::uses('AppController', 'Controller');
/**
 * Shifts Controller
 *
 * @property Shift $Shift
 */
class ShiftsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Shift->recursive = 0;
		$this->set('shifts', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Shift->id = $id;
		if (!$this->Shift->exists()) {
			throw new NotFoundException(__('Invalid shift'));
		}
		$this->set('shift', $this->Shift->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Shift->create();
			if ($this->Shift->save($this->request->data)) {
				$this->Session->setFlash(__('The shift has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shift could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Shift->id = $id;
		if (!$this->Shift->exists()) {
			throw new NotFoundException(__('Invalid shift'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Shift->save($this->request->data)) {
				$this->Session->setFlash(__('The shift has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shift could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Shift->read(null, $id);
		}
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
		$this->Shift->id = $id;
		if (!$this->Shift->exists()) {
			throw new NotFoundException(__('Invalid shift'));
		}
		if ($this->Shift->delete()) {
			$this->Session->setFlash(__('Shift deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Shift was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
