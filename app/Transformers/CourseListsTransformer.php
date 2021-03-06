<?php
/**
 * Created by PhpStorm.
 * User: 孙龙
 * Date: 2016/10/14
 * Time: 15:33
 */
namespace App\Transformers;

use App\Models\Course;
use League\Fractal\TransformerAbstract;

class CourseListsTransformer extends TransformerAbstract
{
    /**
     * Related models to include in this transformation.
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];

    /**
     * Turn this item object into a generic array.
     *
     * @param CourseLists $transformer\courselists
     * @return array
     *
     */
    public function transform(Course $course)
    {
        return [
            'id' => $course->id,
            'course_name' => $course->course_name,
            'belong_class' => $course->belong_class,
            'status' => $course->status,
            'introduce' => $course->introduce,
            'chooser' => $course->chooser,
            'user_id' => $course->user_id,
            'is_custom'=> $course->is_custom,//判断是不是自定义的课程设计
        ];
    }
}
