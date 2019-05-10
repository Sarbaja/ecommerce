<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmsPage;
use Illuminate\Support\Facades\Mail;

class CmsController extends Controller
{
    
    public function addCmsPage(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $cmspage = new CmsPage;
            $cmspage->title = $data['title'];
            $cmspage->url = $data['url'];
            $cmspage->description = $data['description'];
            
            if(empty($data['meta_title'])){
                $data['meta_title']= '';
            }
            if(empty($data['meta_description'])){
                $data['meta_description']= '';
            }
            if(empty($data['meta_keywords'])){
                $data['meta_keywords']= '';
            }
            $cmspage->meta_title = $data['meta_title'];
            $cmspage->meta_description = $data['meta_description'];
            $cmspage->meta_keywords = $data['meta_keywords'];
            if(empty($data['status'])){
                $status = 0;
            }else{
                $status = 1;
            }
            $cmspage->status = $status;
            $cmspage->save();

            return redirect()->back()->with('message_success', 'CMS Page has been added successfully');
        }
        return view('admin.pages.add_cms_page');
    }

    public function viewCmsPages(){
        
        $cmsPages = CmsPage::get();
        //$cmsPages = json_decode(json_encode($cmsPages));
        //echo "<pre>"; print_r($cmsPages); die;
        return view('admin.pages.view_cms_pages')->with('cmsPages', $cmsPages);
    }

    public function editCmsPage(Request $request, $id){
        if($request->isMethod('post')){
            $data = $request->all();
            if(empty($data['status'])){
                $status = 0;
            }else{
                $status = 1;
            }
            if(empty($data['meta_title'])){
                $data['meta_title']= '';
            }
            if(empty($data['meta_description'])){
                $data['meta_description']= '';
            }
            if(empty($data['meta_keywords'])){
                $data['meta_keywords']= '';
            }
            CmsPage::where('id', $id)->update(['title' => $data['title'], 'url' => $data['url'], 'description' => $data['description'], 'meta_title' => $data['meta_title'], 'meta_description' => $data['meta_description'], 'meta_keywords' => $data['meta_keywords'],'status' => $status]);
            return redirect()->back()->with('message_success', 'CMS Page has been updated successfully');

        }

        $cmsPage = CmsPage::where('id', $id)->first();
        return view ('admin.pages.edit_cms_page')->with('cmsPage', $cmsPage);
    }

    public function deleteCmsPage($id){
        CmsPage::where('id', $id)->delete();
        return redirect('/admin/view-cms-page')->with('message_success', 'CMS Page deleted successfully');
    }

    public function cmsPage($url){

        //rediretc to 404 page if cms page is disabled
        $cmsPageCount = CmsPage::where(['url' => $url, 'status' => 1])->count();
        if($cmsPageCount > 0){
            $cmsPageDetails= CmsPage::where('url', $url)->first();
            $meta_title = $cmsPageDetails->meta_title;
            $meta_description = $cmsPageDetails->meta_description;
            $meta_keywords = $cmsPageDetails->meta_keywords;
        }else{
            abort(404);
        }

        $cmsPageDetails = CmsPage::where('url', $url)->first();
        return view('frontend.cms_page')->with('cmsPageDetails', $cmsPageDetails)->with('meta_title', $meta_title)->with('meta_description', $meta_description)->with('meta_keywords', $meta_keywords);
    }

    public function contact(Request $request){

        if($request->isMethod('post')){
            $data= $request->all();
            //echo "<pre>"; print_r($data); die;
            
            //send contact email
            $email = "adhikari.sarbaja@gmail.com";
            $messageData = [
                'name' => $data['name'],
                'email' => $data['email'],
                'subject' => $data['subject'],
                'enquiry' => $data['message']
            ];
            Mail::send('emails.enquiry', $messageData, function($message) use($email){
                $message->to($email)->subject('Enquiry from E-com Website');
            });

            return redirect()->back()->with('message_success', 'Thanks for your enquiry. We will get back you soon');

        }

        $meta_title= "Contact Us - E-commerce Website";
        $meta_description = "Contact us for any queries";
        $meta_keywords = "contact us, queries, online shopping, women clothing, fashion, trendy, makeup";
        return view('frontend.contact')->with('meta_title', $meta_title)->with('meta_description', $meta_description)->with('meta_keywords', $meta_keywords);
    }

}
