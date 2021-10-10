<div class="post_form mt-50">
    <div class="post_title">
        <h5 class="title">Ad Categories</h5>
    </div>

    
    <form wire:submit.prevent='test' action="#">

   
        {{-- Countries --}}
       <div class="single_form">
           <select wire:model="selectedCountry" class="form-control">
               <option value="" selected>Choose country</option>
               @foreach($countries as $country)
                   <option value="{{ $country->id }}">{{ $country->name }}</option>
               @endforeach
           </select>
       </div>

       {{-- states --}}
       @if (!is_null($selectedCountry))
           <div class="single_form" >
               <select wire:model="selectedState" class="form-control">
                   <option value="none">Choose state</option>
                   @foreach($states as $state)
                       <option value="{{ $state->id }}">{{ $state->name }}</option>
                   @endforeach
           
               </select>
           </div>
       @endif
   
       {{-- cities --}}
       @if (!is_null($selectedState))
           <div class="single_form" >
               <option value="none">Choose city</option>
               <select wire:model="selectedCity" class="form-control">
                   @foreach($cities as $city)
                   <option value="none">Mobiles</option>
                   @endforeach
               </select>
           </div>
       @endif




         {{-- countries stuff --}}
         <div class="post_title">
           <h5 class="title">Ad Location</h5>
           </div>
       <div class="single_form">
           <select class="form-control">
               <option value="none">Select Countries</option>
               <option value="none">Mobiles</option>
       
           </select>
       </div>

       <div class="single_form">
           <select class="form-control">
               <option value="none">Select States</option>
               <option value="none">Mobiles</option>
           
           </select>
       </div>

       <div class="single_form">
           <select class="form-control">
               <option value="none">Select Cities</option>
               <option value="none">Mobiles</option>
       
           </select>
       </div>
      
       <button type="submit" class="btn btn-info mt-3" >Next</button>
     
   </form>

</div>
