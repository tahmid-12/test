<div class="sec1">
          
          <section class="sec1">Section 1</section>
          
          @if(count($img) > 0)

          @foreach($img as $i)
          <img style="height: 230px; width: 300px;" src="/storage/upload/{{ $i->image }}" alt="">
          
          <p class="title">{{ $i->img_title }}</p>
          <p class="title">{{ $i->img_body }}</p>
          <p class="brief">brief</p>

          @endforeach 
          @else
          <p>Nothing FOund</p>
          @endif


     </div>