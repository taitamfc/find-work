<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                        data-target="#collapseExperience-" aria-expanded="false" aria-controls="collapseExperience-">
                        <i class="fas fa-plus"></i>
                        Thêm mới công việc
                    </button>
                </div>
            </div>
            <div class="card-body collapse" id="collapseExperience-">
                <form class="default-form" method="POST"
                    action="{{ route('staff.experience.store',['cv_id'=>$item->id]) }}">
                    @csrf
                    @include('staff::cv.tabs.includes.form-experience',['experience' => null])
                </form>
            </div>
        </div>

        @if(count($userExperiences))
        @foreach($userExperiences as $userExperience)
        <div class="card mt-5">
            <div class="card-header">
                <h5 class="card-title">
                    #{{ $userExperience->numerical }} - {{ $userExperience->position }}
                </h5>
            </div>
            <div class="card-body">
                <form class="default-form" method="POST"
                    action="{{ route('staff.experience.update',$userExperience->id) }}">
                    @csrf
                    @method('PUT')
                    @include('staff::cv.tabs.includes.form-experience',['experience' => $userExperience])
                </form>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>