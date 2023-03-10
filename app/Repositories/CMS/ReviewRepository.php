<?php
namespace App\Repositories;

use App\Interfaces\IReviewRepository;
use App\Models\Review;

class ReviewRepository implements IReviewRepository
{

    public function all()
    {
        return Review::orderBy('id','DESC')->paginate(5);
    }

    public function create(array $review)
    {
        $data = new Review();
        $data->content = $review['content'];
        $data->user_id = $review['user_id'];

        $data->save();
        return $data;
    }

    public function find($id)
    {
        return Review::find($id);
    }

    public function delete($id)
    {
        return Review::find($id)->delete();
    }
}