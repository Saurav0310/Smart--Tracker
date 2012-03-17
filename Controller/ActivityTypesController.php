<?php
App::uses('AppController', 'Controller');
/**
 * ActivityTypes Controller
 *
 * @property ActivityType $ActivityType
 */
class ActivityTypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ActivityType->recursive = 0;
		$this->set('activityTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ActivityType->id = $id;
		if (!$this->ActivityType->exists()) {
			throw new NotFoundException(__('Invalid activity type'));
		}
		$this->set('activityType', $this->ActivityType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActivityType->create();
			if ($this->ActivityType->save($this->request->data)) {
				$this->Session->setFlash(__('The activity type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity type could not be saved. Please, try again.'));
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
		$this->ActivityType->id = $id;
		if (!$this->ActivityType->exists()) {
			throw new NotFoundException(__('Invalid activity type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ActivityType->save($this->request->data)) {
				$this->Session->setFlash(__('The activity type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ActivityType->read(null, $id);
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
		$this->ActivityType->id = $id;
		if (!$this->ActivityType->exists()) {
			throw new NotFoundException(__('Invalid activity type'));
		}
		if ($this->ActivityType->delete()) {
			$this->Session->setFlash(__('Activity type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Activity type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
