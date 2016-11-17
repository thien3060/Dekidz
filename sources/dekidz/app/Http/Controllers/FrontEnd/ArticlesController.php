<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Kodeplus\Kandylaravel\Facades\KandyLaravel;
use Pingpong\Admin\Entities\Article;
use Pingpong\Admin\Uploader\ImageUploader;
use Pingpong\Admin\Validation\Article\Create;
use Pingpong\Admin\Validation\Article\Update;

class ArticlesController extends BaseController
{
    protected $articles;

    /**
     * @var ImageUploader
     */
    protected $uploader;

    /**
     * @param ImageUploader $uploader
     */
    public function __construct(ImageUploader $uploader)
    {
        $this->uploader = $uploader;

        $this->repository = $this->getRepository();
    }

    /**
     * Get repository instance.
     *
     * @return mixed
     */
    public function getRepository()
    {
        if (isOnPages()) {
            $repository = 'Pingpong\Admin\Repositories\Pages\PageRepository';
        } else {
            $repository = 'Pingpong\Admin\Repositories\Articles\ArticleRepository';
        }

        return app($repository);
    }

    /**
     * Redirect not found.
     *
     * @return Response
     */
    protected function redirectNotFound()
    {
        return $this->redirect(isOnPages() ? 'pages.index' : 'articles.index')
            ->withFlashMessage('Post not found!')
            ->withFlashType('danger');
    }

    /**
     * Display a listing of articles.
     *
     * @return Response
     */
    public function index()
    {
        //KandyLaravel::syncUsers();
        $articles = Article::whereHas('category', function ($query){
            $query->where('name', '=', 'kid_parent');
        })->paginate(10);
        return $this->view('frontend.pages.articles.index', compact('articles'));
    }

    /**
     * Display a listing of articles.
     *
     * @return Response
     */
    public function frontPage()
    {
        $articles = Article::whereHas('category', function ($query){
            $query->where('name', '=', 'kid');
        })->orderBy('created_at', 'desc')->limit(10)->get();
        return $this->view('frontend.pages.index', compact('articles'));
    }


    /**
     * Display a listing of articles.
     *
     * @return Response
     */
    public function blogone()
    {
        $articles = Article::whereHas('category', function ($query){
            $query->where('name', '=', 'kid');
        })->paginate(10);
        return $this->view('frontend.pages.articles.index', compact('articles'));
    }


    /**
     * Display the specified article.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        try {
            $article = $this->repository->findById($id);

            $new_articles = Article::whereHas('category', function ($query){
                $query->where('name', '=', 'kid');
            })->orderBy('created_at', 'desc')->limit(10)->get();

            return $this->view('frontend.pages.articles.detail', compact('article', 'new_articles'));
        } catch (ModelNotFoundException $e) {
            return $this->redirectNotFound();
        }
    }
}
