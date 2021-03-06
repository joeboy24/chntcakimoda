
@extends('layouts.dashlay')

@section('header_nav')
    @include('inc.header_nav')  
@endsection

@section('sidebar_menu')
    
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li class="sidebar-item">
                <a href="/dashboard" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="/admin_homepage" class='sidebar-link'>
                    <i class="fa fa-home"></i>
                    <span>Homepage</span>
                </a>
            </li>

            <li class="sidebar-item ">
                <a href="/admin_about" class='sidebar-link'>
                    <i class="fa fa-edit"></i>
                    <span>About</span>
                </a>
            </li>

            <li class="sidebar-item active">
                <a href="/admin_news" class='sidebar-link'>
                    <i class="bi bi-pen-fill"></i>
                    <span>News Blog</span>
                </a>
            </li>

            <li class="sidebar-item ">
                <a href="/admin_events" class='sidebar-link'>
                    <i class="fa fa-calendar"></i>
                    <span>Events</span>
                </a>
            </li>
 
            <li class="sidebar-item ">
                <a href="/admin_contacts" class='sidebar-link'>
                    <i class="fa fa-envelope-square"></i>
                    <span>Inbox</span>
                </a>
            </li>

            <li class="sidebar-item ">
                <a href="/admin_newsletter" class='sidebar-link'>
                    <i class="fa fa-share-alt"></i>
                    <span>Newsletter</span>
                </a>
            </li>

            <li class="sidebar-item has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="fa fa-cogs"></i>
                    <span>Settings</span>
                </a>
                <ul class="submenu">
                    <li class="submenu-item">
                        <a href="/companysetup">Company Setup</a>
                    </li>
                    <li class="submenu-item">
                        <a href="/adduser">Add User</a>
                    </li>
                    <li class="submenu-item">
                        <a href="/programs">Add Programs/Courses</a>
                    </li>
                    <li class="submenu-item">
                        <a href="/programs_outline">Course Registration</a>
                    </li>
                    <li class="submenu-item">
                        <a href="/departments">Register Faculty/Dept.</a>
                    </li>
                    <li class="submenu-item">
                        <a href="/add_staff">Add Staff</a>
                    </li>
                    {{-- <li class="submenu-item ">
                        <a href="#">Accounts</a>
                    </li> --}}
                </ul>
            </li>

        </ul>
    </div>

@endsection

@section('content')

    <div class="page-heading">
        <h3>News Blog</h3>
    </div>

    <div class="row">
        <div class="col-12 col-xl-10">
            @include('inc.messages') 
            <div class="card">
                {{-- <div class="card-header">
                    <h4>Add Room Type</h4>
                </div> --}}
                <div class="card-body">

                    <form class="form form-horizontal" action="{{action('DashController@store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">

                                <div class="col-md-4">
                                    <label>Title</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input name="title" type="text" class="form-control" placeholder="Title" id="first-name-icon" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <label>Text</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <div class="form-group with-title mb-3">
                                                <textarea name="text" class="form-control" rows="3" required></textarea>
                                                {{-- <textarea name="company_add" class="form-control" rows="3" placeholder="Address" required></textarea> --}}
                                                <label>Blog text goes here</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <label>Tags</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <div class="form-group with-title mb-3">
                                                <textarea name="tags" class="form-control" rows="2"></textarea>
                                                {{-- <textarea name="company_add" class="form-control" rows="3" placeholder="Address" required></textarea> --}}
                                                <label>eg. #games, #entertainment, #food</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Category</label>
                                </div>
                                <div class="col-md-8">
                                    <fieldset class="form-group">
                                        <select name="category" class="form-select" id="basicSelect">
                                            <option>News</option>
                                            <option>Life</option>
                                            <option>Games</option>
                                            <option>Entertainment</option>
                                            <option>Education</option>
                                            <option>Skills</option>
                                            <option>Food</option>
                                        </select>
                                    </fieldset>
                                </div>

                                <div class="col-md-4">
                                    <label>Display Image</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile010"><i class="bi bi-upload"></i></label>
                                            <input name="dp" type="file" class="form-control" id="inputGroupFile010">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1" name="store_action" value="add_newsblog">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    

                </div>



            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-12 col-xl-10">
            <div class="card">
                <div class="card-body">
                    <!-- NewsBlog View -->
                    @if (count($blogs) != 0)
                        <div class="table-responsive">

                            <table class="table mb-0 table-lg">
                                <thead>
                                    <tr>
                                        <th>IMG</th>
                                        <th>BLOG TITLE & TEXT</th>
                                        <th>DATE</th>
                                        <th class="float_right action_size">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        {{-- <tr>
                                            <td class="text-bold-500"><img src="/storage/classified/news_blog/{{$blog->dp}}" width="40px" style="">&nbsp; {{ $blog->title }}
                                                <br><p class="small_p"><i class="fa fa-user"></i>&nbsp; {{ auth()->user()->name }}</p>
                                            </td>
                                            <td>{{ $blog->text }}</td>
                                            <td>{{ $blog->created_at }}</td>
                                            <td class="text-bold-500 action_size"><button class="my_trash"><i class="fa fa-trash"></i></button></td>

                                        </tr> --}}
                                        @if ($blog->del == 'yes')
                                            <tr class="del_danger">
                                        @else
                                            <tr>
                                        @endif
                                            <td class="text-bold-500"><img src="/storage/classified/news_blog/{{$blog->dp}}" width="40px" style=""></td>
                                            <td class="text-bold-500"><p class="small_p">Title: {{ $blog->title }}</p>
                                                <p class="gray_p">Category: {{ $blog->category }}</p>{{ $blog->text }}<br>
                                                <p class="gray_p">{{ $blog->tags }}</p>
                                                <p class="small_p">Written by {{ $blog->user->name }}</p>
                                            </td>
                                            <td class="text-bold-500">{{ $blog->created_at }}</td>
                                            
                                            <form action="{{ action('DashController@destroy', $blog->id) }}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_method" value="PUT">
                                                @csrf


                                                @if ($blog->del == 'yes')
                                                    <td class="text-bold-500 float_right action_size">
                                                        <button type="submit" name="update_action" value="restore_blog" class="my_trash" onclick="return confirm('Do you want to restore this record?')"><i class="fa fa-reply"></i></button>
                                                    </td>
                                                @else
                                                    <td class="text-bold-500 float_right action_size">
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#edit{{$blog->id}}" class="my_trash"><i class="fa fa-pencil"></i></button>
                                                        <button type="submit" name="update_action" value="del_blog" class="my_trash" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash"></i></button>
                                                    </td>
                                                @endif
                                            </form>
                                        </tr>


                                        <div class="modal fade" id="edit{{$blog->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">
                                                            Edit Blog Here
                                                        </h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <form action="{{ action('DashController@update', $blog->id) }}" method="POST">
                                                        <input type="hidden" name="_method" value="PUT">
                                                        @csrf
                                                        <div class="modal-body">
                                                            
                                                            <div class="col-md-12">
                                                                <label>Title</label>
                                                                <div class="form-group has-icon-left">
                                                                    <div class="position-relative">
                                                                        <input name="title" type="text" class="form-control" placeholder="Title" id="first-name-icon" value="{{ $blog->title }}" required>
                                                                        <div class="form-control-icon">
                                                                            <i class="bi bi-person"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12">
                                                                <label>Text</label>
                                                                <div class="form-group has-icon-left">
                                                                    <div class="position-relative">
                                                                        <div class="form-group with-title mb-3">
                                                                            <textarea name="text" class="form-control" rows="3" required>{{ $blog->text }}</textarea>
                                                                            <label>Blog text goes here</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12">
                                                                <label>Tags</label>
                                                                <div class="form-group has-icon-left">
                                                                    <div class="position-relative">
                                                                        <div class="form-group with-title mb-3">
                                                                            <textarea name="tags_up" class="form-control" rows="2" required>{{ $blog->tags }}</textarea>
                                                                            {{-- <textarea name="company_add" class="form-control" rows="3" placeholder="Address" required></textarea> --}}
                                                                            <label>eg. #games, #entertainment, #food</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <label>Category</label>
                                                                <fieldset class="form-group">
                                                                    <select name="category" class="form-select" id="basicSelect">
                                                                        @if ($blog->category == 'News')
                                                                            <option selected>News</option>
                                                                            <option>Life</option>
                                                                            <option>Games</option>
                                                                            <option>Entertainment</option>
                                                                            <option>Education</option>
                                                                            <option>Skills</option>
                                                                            <option>Food</option>
                                                                        @elseif ($blog->category == 'Life')
                                                                            <option>News</option>
                                                                            <option selected>Life</option>
                                                                            <option>Games</option>
                                                                            <option>Entertainment</option>
                                                                            <option>Education</option>
                                                                            <option>Skills</option>
                                                                            <option>Food</option>
                                                                        @elseif ($blog->category == 'Games')
                                                                            <option>News</option>
                                                                            <option>Life</option>
                                                                            <option selected>Games</option>
                                                                            <option>Entertainment</option>
                                                                            <option>Education</option>
                                                                            <option>Skills</option>
                                                                            <option>Food</option>
                                                                        @elseif ($blog->category == 'Entertainment')
                                                                            <option>News</option>
                                                                            <option>Life</option>
                                                                            <option>Games</option>
                                                                            <option selected>Entertainment</option>
                                                                            <option>Education</option>
                                                                            <option>Skills</option>
                                                                            <option>Food</option>
                                                                        @elseif ($blog->category == 'Education')
                                                                            <option>News</option>
                                                                            <option>Life</option>
                                                                            <option>Games</option>
                                                                            <option>Entertainment</option>
                                                                            <option selected>Education</option>
                                                                            <option>Skills</option>
                                                                            <option>Food</option>
                                                                        @elseif ($blog->category == 'Skills')
                                                                            <option>News</option>
                                                                            <option>Life</option>
                                                                            <option>Games</option>
                                                                            <option>Entertainment</option>
                                                                            <option>Education</option>
                                                                            <option selected>Skills</option>
                                                                            <option>Food</option>
                                                                        @else
                                                                            <option>News</option>
                                                                            <option>Life</option>
                                                                            <option>Games</option>
                                                                            <option>Entertainment</option>
                                                                            <option>Education</option>
                                                                            <option>Skills</option>
                                                                            <option selected>Food</option>
                                                                        @endif
                                                                    </select>
                                                                </fieldset>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i><span class="d-none d-sm-block">Close</span>
                                                            </button>
                                                            <button type="submit" name="update_action" value="blog_update" class="btn btn-primary me-1 mb-1">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

 