<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                        data-target="#collapseExperience-" aria-expanded="false" aria-controls="collapseExperience-">
                        <i class="fas fa-plus"></i>
                        Thêm mới học vấn
                    </button>
                </div>
            </div>
            <div class="card-body collapse" id="collapseExperience-">
                <form class="default-form" method="POST"
                    action="{{ route('staff.education.store',['cv_id'=>$cv_id]) }}">
                    @csrf
                    @include('staff::cv.tabs.includes.form-education',['education' => null])
                </form>
            </div>
        </div>

        @if(count($userEducations))
        @foreach($userEducations as $userEducation)
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="card-title">
                    #{{ $userEducation->numerical }} - {{ $userEducation->school_course }}
                </h5>
            </div>
            <div class="card-body">
                <form class="default-form" method="POST"
                    action="{{ route('staff.education.update',$userEducation->id) }}">
                    @csrf
                    @method('PUT')
                    @include('staff::cv.tabs.includes.form-education',['education' => $userEducation])
                </form>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>