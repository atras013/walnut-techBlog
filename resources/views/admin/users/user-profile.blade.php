

<x-admin-master>

    @section("content")
       
      <div class="profile">
        <h3 class="header">اطلاعات حساب</h3>
        {{-- <div class="small-info" >
            <img width="70px" height="70px" src="{{ asset( $user->avatar )}}" alt="">
            <p class="name" >{{ $user->name }}</p>
        </div> --}}
 
       <form method="POST" class="form" action="{{ route('users.update' , $user->id ) }}" enctype="multipart/form-data">
        @csrf
        @method("PUT")
           <div class="form-group">
               <label for="name">نام</label>
               <input  
               class="
               form-control
               @error('name')
                 is-invalid
               @enderror  
               " 
               type="text" 
               name="name" 
               value="{{ $user->name }}" >
               
               @error('name')

                 <span class="invalid-feedback d-block" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
                   
               @enderror

           </div>

           <div class="form-group">
            <label for="avatar">عکس پروفایل</label>
            <input style="height: auto" class="profile-avatar" name="avatar" type="file">
           </div>
           
           <div class="form-group">
               <label  for="username">نام کاربری</label>
               <input  
               class="form-control
                         @error('username')
                           is-invalid

                           @enderror
                       "     
               
               type="text" 
               name="username" 
               id="username"
               value="{{ $user->username }}">
               @error('username')
                <span class="invalid-feedback d-block" role="alert">
                 <strong>{{ $message }}</strong>
                </span>
                @enderror  
      
           </div>
           <div class="form-group">
               <label for="email">ایمیل</label>
               <input  
               class="
               form-control
                @error('email')
                    is-invalid
                @enderror
               " 
               type="text" 
               name="email" 
               value="{{ $user->email }}" >
               @error('email')
                 
                 <span class="invalid-feedback d-block" role="alert" >
                     <strong>{{ $message }}</strong>
                 </span>

               @enderror
           </div>
           <div class="form-group">
               <label for="password">تغییر رمز عبور</label>
               <input  class="form-control" type="password" name="password" >
           </div>
             
           <button class="btn btn-primary update" >ویرایش</button>
           
       </form>

    </div>

    
       

    @stop
   
</x-admin-master>