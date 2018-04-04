<?php

namespace App\Http\Controllers;

use App\Globals\GlobalsConst;
use App\Helpers\AuthWrapper;
use App\Models\Article;
use App\Models\Image;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Services;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $_user_service;
    private $_article;
    private $_image;


    public function __construct(Services\UserService $service, Article $article,Image $image) //this is dependency injector
    {
        $this->_user_service = $service;
        $this->_article = $article;
        $this->_image = $image;
    }

    public function index()
    {
        $likeData = $this->getLikes();
        $articles = $this->_article->getArticles();
        return view('Article.index',compact('articles','likeData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Article.createArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(AuthWrapper::check())
        $userId = AuthWrapper::loggedInUser()->id;
//                                          Applying Article Rules
        $vRules = Article::$rules;
        $validator = Validator::make($request->all(), $vRules);
                                    //Validate Article Form
        if ($validator->fails()) {

            return response()->json([
                'error' => $validator->errors()->all()]);
        }
//                                  Save Article Detail First
        $articleId = $this->_user_service->saveArticle($request);
        $result = $this->_article->addRecordLikes($articleId);

        if ($articleId){

//                          Now Time To Save Article Image
            if ($request->hasFile('image')) {
                $response = null;
                $file            = $request->file('image');
                $filename        = time(). '.' . $file->getClientOriginalExtension();
//                $filename        = time().'.'.str_random(16).'_'.$file->getClientOriginalName();
                $destinationPath = public_path(GlobalsConst::ARTICLE_PHOTO_DIR)."/".$userId;
                $uploadStatus   = $file->move($destinationPath, $filename);
//                Image::make($file)->resize(800,400)->
                $this->_article->updateArticleImage ($filename,$userId,$articleId);
//                $imageStatus=$this->_article->updateArticleImage ($filename,$userId);
                $response = ['success'=>true,'uploaded'=>$filename,'message'=>'Photo has been uploaded successfully!'];
            }else
                $response = ['success'=>false,'error'=>'No files were processed.'];

//                                      If Save Image TOO . . . Redirect to Articel List Page
            return redirect('/article');

        } else
            return redirect('error')->with('message', 'Problelm With Save Article!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $likeData = $this->getLikes();
        $articles = $this->_article->displayarticle($id);
        return view("Article.article", compact('articles','likeData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function likeManage()
    {
        $data['likeData'] = $_POST['like_data'];
        $data['articleId'] = $_POST['article_id'];
        $data['studentId'] = $_POST['student_id'];

        $likes = $this->_article->getLikesRecord($data,'like_logs');
        if($likes == "1") {
            $result = $this->_article->deleteRecord($data);
            $decrementResult = $this->_article->likeAction($data,"decrement");
        }
        else {
//            $likes = $this->_article->getLikesRecord($data,'likes');
//            if()
            $result = $this->_article->addRecordLog($data);
            $incrementResult = $this->_article->likeAction($data,"increment");
        }
        $newLikes = $this->_article->newLikes($data);

        return json_encode($newLikes);
    }

    public function getLikes(){
        if(Auth::check()){
            $data['studentId'] = Auth::user()->id;
            $likes = $this->_article->getLikesForList($data);
            $likeData[] = "";
            foreach($likes as $like){
                array_push($likeData, $like->article_id);
            }
            return $likeData;
        }
    }
}
