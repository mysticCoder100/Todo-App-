<div class="grid gap-2 mb-4">
    <label for="name" class="label">
        {{$label}}
    </label>

    <div class="relative">
    @if($type === "textarea")
        <textarea
            id="{{$name}}"
            placeholder="{{$placeholder}}"
            name="{{$name}}"
            class="textarea lg:textarea-md xl:textarea-lg {{ $classes }} @error($name) !textarea-error @enderror"
        >
            {{ old($name) }}
        </textarea>
    @else
           <input
               type="{{ $type }}"
               id="{{$name}}"
               placeholder="{{$placeholder}}"
               name="{{$name}}"
               class= "input lg:input-md xl:input-lg {{ $isPassword ? 'pr-[3.5rem]' : '' }} {{ $classes }} @error($name) !input-error @enderror"
               value="{{ old($name) }}"
           />
           @if($isPassword)
               <button type="button" wire:click="togglePassword"  class="btn p-0 bg-transparent absolute !top-[50%] !translate-y-[-50%] right-3 z-100">
                   {{$passwordToggleText}}
               </button>
           @endif
    @endif
    </div>
    @error($name)
        <small class="text-error">
            {{ $message  }}
        </small>
    @enderror

</div>


