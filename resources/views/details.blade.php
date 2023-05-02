@extends('master')

@section('Title')
    Achievement's Details
@endsection

@section('Content')
<div class="flex flex-col items-center w-full h-[45.1vw] bg-gradient-to-b from-green-100 via-fuchsia-200 to-purple-400">
    @if ($run['range'] == '200m')
        <div class="flex flex-row w-full h-[21vw]">
            <a class="mt-[0.5vw] ml-[0.5vw] drop-shadow-lg" href="/achievement#aboutMe"><svg xmlns="http://www.w3.org/2000/svg" width="4vw" height="4vw" viewBox="0 0 512 512"><path fill="currentColor" d="M48 256c0 114.87 93.13 208 208 208s208-93.13 208-208S370.87 48 256 48S48 141.13 48 256Zm212.65-91.36a16 16 0 0 1 .09 22.63L208.42 240H342a16 16 0 0 1 0 32H208.42l52.32 52.73A16 16 0 1 1 238 347.27l-79.39-80a16 16 0 0 1 0-22.54l79.39-80a16 16 0 0 1 22.65-.09Z"/></svg></a>
            <div class="w-[30vw] h-[20vw] mt-[2.5vw] ml-[30vw] border-[0.5vw] border-[#CD7F32] flex items-center justify-center">
                <img class="w-[28vw] h-[18vw] border-[0.2vw] border-black" src="{{$run['image']}}" alt="">
            </div>
        </div>
        <img class="w-[5vw] h-[6.4vw] mr-[-50vw] mb-[-4vw] mt-[-2vw]" src="../Assets/AchievementDetails/Chibi-run.png" alt="">
        <div class="flex items-center justify-center mt-[3.5vw] w-[60vw] h-[18vw] rounded-[2vw] bg-white drop-shadow-xl border-black border-[0.2vw]">
            <div class="w-[56vw] h-[14vw] text-justify text-[1.5vw]">
                <p class="align-middle">{{$run['details']}}</p>
            </div>
        </div>

    @elseif ($run['range'] == '4x400m')
        <div class="flex flex-row w-full h-[21vw]">
            <a class="mt-[0.5vw] ml-[0.5vw] drop-shadow-lg" href="/achievement#aboutMe"><svg xmlns="http://www.w3.org/2000/svg" width="4vw" height="4vw" viewBox="0 0 512 512"><path fill="currentColor" d="M48 256c0 114.87 93.13 208 208 208s208-93.13 208-208S370.87 48 256 48S48 141.13 48 256Zm212.65-91.36a16 16 0 0 1 .09 22.63L208.42 240H342a16 16 0 0 1 0 32H208.42l52.32 52.73A16 16 0 1 1 238 347.27l-79.39-80a16 16 0 0 1 0-22.54l79.39-80a16 16 0 0 1 22.65-.09Z"/></svg></a>
            <div class="w-[30vw] h-[20vw] mt-[2.5vw] ml-[30vw] border-[0.5vw] border-[#C0C0C0] flex items-center justify-center">
                <img class="w-[28vw] h-[18vw] border-[0.2vw] border-black" src="{{$run['image']}}" alt="">
            </div>
        </div>
        <img class="w-[5vw] h-[6.4vw] mr-[-50vw] mb-[-4vw] mt-[-2vw]" src="../Assets/AchievementDetails/Chibi-run.png" alt="">
        <div class="flex items-center justify-center mt-[3.5vw] w-[60vw] h-[18vw] rounded-[2vw] bg-white drop-shadow-xl border-black border-[0.2vw]">
            <div class="w-[56vw] h-[14vw] text-justify text-[1.5vw]">
                <p class="align-middle mt-[2.5vw]">{{$run['details']}}</p>
            </div>
        </div>

    @elseif ($run['range'] == '4x100m')
        <div class="flex flex-row w-full h-[21vw]">
            <a class="mt-[0.5vw] ml-[0.5vw] drop-shadow-lg" href="/achievement#aboutMe"><svg xmlns="http://www.w3.org/2000/svg" width="4vw" height="4vw" viewBox="0 0 512 512"><path fill="currentColor" d="M48 256c0 114.87 93.13 208 208 208s208-93.13 208-208S370.87 48 256 48S48 141.13 48 256Zm212.65-91.36a16 16 0 0 1 .09 22.63L208.42 240H342a16 16 0 0 1 0 32H208.42l52.32 52.73A16 16 0 1 1 238 347.27l-79.39-80a16 16 0 0 1 0-22.54l79.39-80a16 16 0 0 1 22.65-.09Z"/></svg></a>
            <div class="w-[30vw] h-[20vw] mt-[2.5vw] ml-[30vw] border-[0.5vw] border-[#C0C0C0] flex items-center justify-center">
                <img class="w-[28vw] h-[18vw] border-[0.2vw] border-black" src="{{$run['image']}}" alt="">
            </div>
        </div>
        <img class="w-[5vw] h-[6.4vw] mr-[-50vw] mb-[-4vw] mt-[-2vw]" src="../Assets/AchievementDetails/Chibi-run.png" alt="">
        <div class="flex items-center justify-center mt-[3.5vw] w-[60vw] h-[18vw] rounded-[2vw] bg-white drop-shadow-xl border-black border-[0.2vw]">
            <div class="w-[56vw] h-[14vw] text-justify text-[1.5vw]">
                <p class="align-middle mt-[2.5vw]">{{$run['details']}}</p>
            </div>
        </div>

    @else
        <div class="flex flex-row w-full h-[21vw]">
            <a class="mt-[0.5vw] ml-[0.5vw] drop-shadow-lg" href="/achievement#aboutMe"><svg xmlns="http://www.w3.org/2000/svg" width="4vw" height="4vw" viewBox="0 0 512 512"><path fill="currentColor" d="M48 256c0 114.87 93.13 208 208 208s208-93.13 208-208S370.87 48 256 48S48 141.13 48 256Zm212.65-91.36a16 16 0 0 1 .09 22.63L208.42 240H342a16 16 0 0 1 0 32H208.42l52.32 52.73A16 16 0 1 1 238 347.27l-79.39-80a16 16 0 0 1 0-22.54l79.39-80a16 16 0 0 1 22.65-.09Z"/></svg></a>
            <div class="w-[30vw] h-[20vw] mt-[2.5vw] ml-[30vw] border-[0.5vw] border-[#CD7F32] flex items-center justify-center">
                <img class="w-[28vw] h-[18vw] border-[0.2vw] border-black" src="{{$run['image']}}" alt="">
            </div>
        </div>
        <img class="w-[5vw] h-[6.4vw] mr-[-50vw] mb-[-4vw] mt-[-2vw]" src="../Assets/AchievementDetails/Chibi-run.png" alt="">
        <div class="flex items-center justify-center mt-[3.5vw] w-[60vw] h-[18vw] rounded-[2vw] bg-white drop-shadow-xl border-black border-[0.2vw]">
            <div class="w-[56vw] h-[14vw] text-justify text-[1.5vw]">
                <p class="align-middle mt-[1.3vw]">{{$run['details']}}</p>
            </div>
        </div>
    @endif

</div>
@endsection
