@extends('website.layouts.master')
@section('content')
<style>
.apply-job {
    margin-top: 200px;
}


.table-responsive {
    margin-top: 20px;
}

.centered-container {
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
<div class="apply-job p-3 mb-3" style="background-color: rgba(238,121,49,0.16);">
    <h5 class="font-def bold mb-0">{{$job->name}}</h5>
    <p class="font-sm mb-2">{{$job->user->userEmployee->company_name}}</p>
    
</div>

<form action="/Home/ApplyJobWithoutCv" method="post" id="frmSelectCV"><input type="hidden" name="JobId" value="3266"
        required=""> <input type="hidden" name="job_id" value="{{$job->id}}">
    <div class="table-responsive">
        <table class="table table-bordered my-3">
            <tbody>
                <tr>
                    <th class="text-center">Chọn</th>
                    <th>Hồ sơ</th>
                    <th class="text-center">Ngày tạo</th>
                    <th class="text-center">Chức năng</th>
                </tr>
                @foreach ($userStaffs as $userStaff)
                <tr>
                    <td class="text-center">
                        <input type="radio" name="cv_id" value="{{ $userStaff->id }}" id="rdo-{{ $userStaff->id }}">
                    </td>
                    <td>
                        <label for="rdo-{{ $userStaff->id }}">{{ $userStaff->name }}</label>
                        <span class="alert alert-primary p-1"> Online </span>
                    </td>
                    <td class="text-center">{{ $userStaff->created_at->format('d/m/Y') }}</td>
                    <td class="text-center">
                        <a href="#" onclick="return openResumeModel('{{ $userStaff->id }}')"
                            class="btn btn-sm btn-primary my-2 my-sm-0">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="/Candidate/ResumeAdd" class="btn btn-sm btn-outline-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container centered-container">
        <button id="btnSelectCV" type="submit" class="btn btn-primary"> Ứng tuyển ngay </button>
    </div>
</form>
@endsection