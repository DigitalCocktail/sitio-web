<?php namespace Wardrobe\Core\Controllers;

use View, Config, Input, App;
use Wardrobe\Core\Repositories\PostRepositoryInterface;

class PostController extends BaseController {

	/**
	 * The post repository implementation.
	 *
	 * @var Wardrobe\PostRepositoryInterface
	 */
	protected $posts;

	/**
	 * Create a new API Posts controller.
	 *
	 * @param PostRepositoryInterface $posts
	 *
	 * @return PostController
	 */
	public function __construct(PostRepositoryInterface $posts)
	{
		parent::__construct();

		$this->posts = $posts;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = trim(Input::get('q'));
		if ($search)
		{
			$posts = $this->posts->search(Input::get('q'), Config::get('wardrobe.per_page'));
		}
		else
		{
			$posts = $this->posts->active(Config::get('wardrobe.per_page'));
		}

		return View::make($this->theme.'.archive', compact('posts', 'search'))->with(array('active'=>4));
	}

	/**
	 * Get posts by tag
	 *
	 * @param string $tag
	 *
	 * @return Response
	 */
	public function tag($tag)
	{
		$posts = $this->posts->activeByTag($tag, Config::get('wardrobe.per_page'));

		if ( ! $posts)
		{
			return App::abort(404, 'Page not found');
		}

		return View::make($this->theme.'.archive', compact('posts', 'tag'))->with(array('active'=>4));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param string $slug
	 *
	 * @return Response
	 */
	public function show($slug)
	{
		$post = $this->posts->findBySlug($slug);

		if ( ! $post)
		{
			return App::abort(404, 'Page not found');
		}
		$tags = $post->tags;
		foreach ($tags as $t) {
			if ($t->tag != ""){
				$tag = $t->tag;
				break;
			}
		}
		$articulosRelacionados = $this->posts->activeByTag($tag, 3);
		return View::make($this->theme.'.post', compact('post'))->with(array('active'=>4, 'articulosRelacionados'=>$articulosRelacionados));
	}

	/**
	 * Show a post preview.
	 *
	 * @param int $id
	 *
	 * @return Response
	 */
	public function preview($id)
	{
		if ( ! $this->auth->check())
		{
			return App::abort(404, 'Page not found');
		}

		return View::make($this->theme.'.preview', array('id' => $id));
	}

}
