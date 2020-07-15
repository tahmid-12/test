<div class="sec1">
          
          <section class="sec1">Section 1</section>
          
          @if(count($vid) > 0)

          @foreach($vid as $v)
          <!--
          <img style="height: 230px; width: 300px;" src="/storage/upload/{{ $i->image }}" alt="">
          -->
          <iframe width="100" height="315" src="https://www.youtube.com/embed/npnp--SSx_8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          <p class="title">{{ $v->vid_title }}</p>
          <p class="title">{{ $v->vid_body }}</p>
          <p class="brief">brief</p>

          @endforeach 
          @else
          <p>Nothing FOund</p>
          @endif


     </div>