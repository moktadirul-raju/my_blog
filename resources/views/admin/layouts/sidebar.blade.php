<nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="{{ asset('images/user/'.Auth::user()->image) }}" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">{{ Auth::user()->name }}</div><small>{{ Auth::user()->email }}</small></div>
                </div>
                


                @if(Request::is('admin*'))

                <ul class="side-menu metismenu">


                    <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                        <a class="" href="{{ route('admin.dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>


                    <li class="heading">MAIN NAVIGATION</li>
                    <li class="{{ Request::is('admin/post*') ? 'active' : '' }}">
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Post Control</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ route('admin.post.index') }}">Read Your Post</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.post.create') }}">Create A New Post</a>
                            </li>   
                        </ul>
                    </li>

                    <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                        <a href="{{ route('admin.category.index') }}"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Category</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/tag*') ? 'active' : '' }}">
                        <a href="{{ route('admin.tag.index') }}"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Tag Control</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/pending/post') ? 'active' : '' }}">
                        <a href="{{ route('admin.post.pending') }}"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Pending Posts</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/favorite') ? 'active' : '' }}">
                        <a href="{{ route('admin.favorite.index') }}"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Favorite Posts</span>
                        </a>
                    </li>

                     <li class="{{ Request::is('admin/comments') ? 'active' : '' }}">
                        <a href="{{ route('admin.comment.index') }}"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Comments</span>
                        </a>
                    </li>
                     <li class="{{ Request::is('admin/messages') ? 'active' : '' }}">
                        <a href="{{ route('admin.messages.index') }}"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Messages</span>
                        </a>
                    </li>

                    <li class="heading">PAGES</li>
                   <li class="{{ Request::is('admin/authors') ? 'active' : '' }}">
                        <a href="{{ route('admin.author.index') }}"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Authors Control</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/subscriber') ? 'active' : '' }}">
                        <a href="{{ route('admin.subscriber.index') }}"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Subscribers Control</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/contacts') ? 'active' : '' }}">
                        <a href="{{ route('admin.contacts.index') }}"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Contacts Control</span>
                        </a>
                    </li>
                    
                    @endif

                    {{-- ADMIN CONTROL END --}}
                </ul>


                @if(Request::is('author*'))

                <ul class="side-menu metismenu">


                    <li class="{{ Request::is('author/dashboard') ? 'active' : '' }}">
                        <a class="" href="{{ route('author.dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>


                    <li class="heading">MAIN NAVIGATION</li>
                    <li class="{{ Request::is('author/post*') ? 'active' : '' }}">
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Post Control</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ route('author.post.index') }}">Read Your Post</a>
                            </li>
                            <li>
                                <a href="{{ route('author.post.create') }}">Create A New Post</a>
                            </li>   
                        </ul>
                    </li>

                   
                    <li class="{{ Request::is('author/favorite') ? 'active' : '' }}">
                        <a href="{{ route('author.favorite.index') }}"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Favorite Posts</span>
                        </a>
                    </li>

                     <li class="{{ Request::is('author/comments') ? 'active' : '' }}">
                        <a href="{{ route('author.comment.index') }}"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Comments</span>
                        </a>
                    </li>             
                    @endif
            </div>
        </nav>