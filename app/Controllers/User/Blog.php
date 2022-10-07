<?php

namespace App\Controllers\User;

use App\Core\Controller;
use App\Liblaries\Sesion;
use App\Models\Blog as Blogs;

class Blog extends Controller
{
	/**
	 * Load View
	 */
	public function index($id)
	{
		// Blog data
		$blog = new Blogs;
		$data = $blog->select('*, blog.*')
			->leftJoin('category', 'category.cate_id', 'blog.blog_cate_id')
			->leftJoin('user', 'user.user_id', 'blog.bolg_user_id')
			->where('blog.blog_id', $id)
			->get();

		$data = $data->fetch_assoc();

		// Update view blog
		$update_view = Blogs::update(['blog_id' => $id], [
			'blog_view' => (int)$data['blog_view'] + 1,
		]);


		$slug = $this->input->get('slug');
		view('user/template-1/main-page', [
			'page' => 'user/template-1/page/blog-detail',
			'records' => $slug,
			'title' => 'Blog Detail',
		]);
	}
}
