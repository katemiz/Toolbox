<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Article;
use App\Models\User;


class Articles extends Component
{
    use WithPagination;

    public $idArticle;
    public $article = false;

    public $prop1;
    public $prop2;

    public $isAdd = false;
    public $isEdit = false;
    public $isList = true;
    public $isView = false;
    public $isRelease = false;

    public $checker = false;
    public $approver = false;

    public $checkers = [];
    public $approvers = [];


    public $search = '';
    public $sortField = 'prop1';
    public $sortDirection = 'asc';

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'prop1' => 'required',
        'prop2' => 'required'
    ];

    protected $listeners = [
        'runDelete'=>'deleteArticle'
    ];





    public function render()
    {
        $articles = [];

        if (request('idArticle')) {
            $this->viewArticle(request('idArticle'));
        } else {

            $articles = Article::where('prop1', 'LIKE', "%$this->search%")
            ->orWhere('prop1', 'LIKE', "%$this->search%")
            ->orderBy($this->sortField,$this->sortDirection)
            ->paginate(env('RESULTS_PER_PAGE'));

            // dd(['aa'=>gettype($articles)]);

        }

        return view('articles.articles-home',[
            'articles' => $articles
        ]);

    }


    public function listAll()
    {
        $this->isAdd = false;
        $this->isEdit = false;
        $this->isList = true;
        $this->isView = false;
    }

    public function resetFields(){
        $this->prop1 = '';
        $this->prop2 = '';
    }

    public function editArticle($idArticle)
    {
        $this->article = Article::find($idArticle);
        $this->idArticle = $idArticle;
        $this->isAdd = false;
        $this->isEdit = true;
        $this->isList = false;
        $this->isView = false;

        $this->prop1 = $this->article->prop1;
        $this->prop2 = $this->article->prop2;

    }

    public function addArticle()
    {
        $this->isAdd = true;
        $this->isEdit = false;
        $this->isList = false;
        $this->isView = false;

    }

    public function viewArticle($idArticle)
    {
        $this->article = Article::find($idArticle);
        $this->isAdd = false;
        $this->isEdit = false;
        $this->isList = false;
        $this->isView = true;

    }




    public function storeArticle()
    {
        $this->validate();
        try {
            $this->article = Article::create([
                'prop1' => $this->prop1,
                'prop2' => $this->prop2
            ]);
            session()->flash('success','Article Created Successfully!!');
            $this->resetFields();

            $this->isAdd = false;
            $this->isEdit = false;
            $this->isList = false;
            $this->isView = true;


        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }
    }





    public function updateArticle()
    {
        $this->validate();
        try {
            Article::whereId($this->idArticle)->update([
                'prop1' => $this->prop1,
                'prop2' => $this->prop2
            ]);
            session()->flash('message','Article Updated Successfully!!');
            $this->resetFields();

            $this->article = Article::find($this->idArticle);

            $this->isAdd = false;
            $this->isEdit = false;
            $this->isList = false;
            $this->isView = true;

        } catch (\Exception $ex) {
            session()->flash('success','Something goes wrong!!');
        }
    }






    public function deleteConfirm($idArticle)
    {
        $this->dispatchBrowserEvent('runConfirmDialog', [
            'title' => 'Item has been removed.',
            'text'=>'success',
            'id'=>$idArticle,
        ]);
    }

    public function deleteArticle($idArticle)
    {
        Article::find($idArticle)->delete();

        session()->flash('message','Article Deleted Successfully!!');

        $this->isAdd = false;
        $this->isEdit = false;
        $this->isList = true;
        $this->isView = false;
    }


    public function startRelease($idArticle)
    {
        $this->isAdd = false;
        $this->isEdit = false;
        $this->isList = false;
        $this->isView = false;
        $this->isRelease = true;

        session()->flash('release-start','Your are statrting article release process.!');

        $checkers = User::role('eng_checker')->get();
        $approvers = User::role('eng_approvers')->get();

        if (count($checkers) === 1) {

            $this->checker = $checkers["0"];
            $this->approver = $approvers["0"];

        }


        // dd($idArticle);

    }


}
