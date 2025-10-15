<?php

namespace App\Http\Controllers\Backend\Project;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use App\Models\ProjectPhotos;
use App\Models\Brands;
use App\Models\Categorys;
use App\Models\HomeTestimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $projects = Projects::query()
            ->get();
        return view('admin.pages.projects.project', ["projects" => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $brands = Brands::query()->get();
        $categorys = Categorys::query()->get();
        $testimonials = HomeTestimonials::query()->get();
        return view("admin.pages.projects.project_create",["brands" => $brands, "categorys" => $categorys, 'testimonials'=> $testimonials]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:3',
            'description1'=>'required|min:3',
            'brand_id'=>'required',
            'category_id'=>'required',
            'testimonial_id'=>'required',
            'photo' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

            $slug = Str::slug($request->title);
            $project= new Projects;
            $project->title=$request->title;
            if($request->hasFile('photo')){
                //$imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
                $imageName= date('YmdHi').$request->photo->getClientOriginalName();
                $request->photo->move(public_path('frontend/img/project'),$imageName);
                $project->photo=$imageName;
            }
            $project->brand_id=$request->brand_id;
            $project->category_id=$request->category_id;
            $project->testimonial_id=$request->testimonial_id;
            
            $project->slug=$slug;
            $project->description1=$request->description1;
            $project->description2=$request->description2;
            $project->description3=$request->description3;
            $project->save();

            if($request->hasFile('image')){
                $images = $request->image;
                foreach ($images as $image) {
                    $projectphoto = new ProjectPhotos;
                    $projectphoto->slug = $request->title;
                    $projectphoto->project_id = $project->id;
                    $imageName= date('YmdHi').$image->getClientOriginalName();
                    $image->move(public_path('frontend/img/project'),$imageName);
                    $projectphoto->photo=$imageName;
                    $projectphoto->save();
                }
            }

            return redirect()->route('project.index')->with('success','Project has been created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $project = Projects::find($id);
        $brands = Brands::query()->get();
        $categorys = Categorys::query()->get();
        $testimonials = HomeTestimonials::query()->get();
        return view("admin.pages.projects.project_edit",['project' => $project, "brands" => $brands, "categorys" => $categorys, "testimonials" => $testimonials]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $request->validate([
            'title'=>'required|min:3',
            'description1'=>'required|min:3',
            'brand_id'=>'required',
            'category_id'=>'required',
            'testimonial_id'=>'required',
        ]);

            $slug = Str::slug($request->title);
            $project= Projects::findOrFail($request->id);
            $project->title=$request->title;
            if($request->hasFile('photo')){
                //$imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
                $imageName= date('YmdHi').$request->photo->getClientOriginalName();
                $request->photo->move(public_path('frontend/img/project'),$imageName);
                $project->photo=$imageName;
            }
            $project->brand_id=$request->brand_id;
            $project->category_id=$request->category_id;
            $project->testimonial_id=$request->testimonial_id;
            
            $project->slug=$slug;
            $project->description1=$request->description1;
            $project->description2=$request->description2;
            $project->description3=$request->description3;
            $project->save();

            if($request->hasFile('image')){
                $images = $request->image;
                foreach ($images as $image) {
                    $projectphoto = new ProjectPhotos;
                    $projectphoto->slug = $request->title;
                    $projectphoto->project_id = $project->id;
                    $imageName= date('YmdHi').$image->getClientOriginalName();
                    $image->move(public_path('frontend/img/project'),$imageName);
                    $projectphoto->photo=$imageName;
                    $projectphoto->save();
                }
            }

            return redirect()->route('project.index')->with('success','Project has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $project = Projects::find($id);
        $project->delete();
        return redirect()->route('project.index')
            ->with('success','Project has been deleted successfully.');
    }
}
