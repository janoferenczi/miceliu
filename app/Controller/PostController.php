<?php
class PostController extends AppController {
    
    public $helpers = array('Html');
    
    public function index(){
        $tempPosts = $this->Post->find('all',array("order"=>"Post.id DESC"));
        $posts = array();
        foreach($tempPosts as $t){
            $id = $t['Post']['id'];
            $title = $t['Post']['title'];
            $text = $t['Post']['text'];
            $isContinue = false;
            if(strlen($text) > 1000){
                $text = substr($text,0,1000).'...';
                $isContinue = true;
            }
            array_push($posts, array('id'=>$id,'title'=>$title,'text'=>$text,'isContinue'=>$isContinue));
        }
        
        $this->set('posts',$posts);
    }
    
    public function show($id){
        $this->set('post',$this->Post->find('threaded', array('conditions' => array('id' => $id))));
    }
    
    public function add(){
        if ($this->request->is('post')) {
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
    }
    
    public function edit($id = null){
        if(!$id){
            throw new  NotFoundException(__("Invalid post"));
        }
        
        $post = $this->Post->findById($id);
        if(!$post){
            throw new NotFoundException(__("Post not found"));
        }
        
        if($this->request->is(array('post','put'))){
            $this->Post->id = $id;
            if($this->Post->save($this->request->data)){
                $this->Session->setFlash(__("Your post has ben updated"));
                return $this->redirect(array('action'=>'index'));
            }
        }
        if(!$this->request->data){
            $this->request->data = $post;
        }
    }
    
    public function delete($id){
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }
        
        if($this->Post->delete($id)){
            $this->Session->setFlash(__("The post with id: %s has been deleted",$id));
            return $this->redirect(array("action"=>"index"));
        }
    }
}
