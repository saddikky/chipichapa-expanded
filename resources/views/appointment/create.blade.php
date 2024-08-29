@extends('user-layout')

@section('content')
    <div class="text-center mt-3">
    <h2>Fill in your appointment details.</h2>
    <p>Tell us about your story.</p>
    </div>

    <div class="big-rounded-container">
        <form action="{{ route('appt.store') }} " method="post">
        <div class="mb-3">
            @csrf
            <label for="title" class="form-label" style="font-weight: bold;">Subject</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Add subject">
        </div>
        <div>
            <label for="service" class="form-label" style="font-weight: bold;">Type of Service</label>
            <input class="form-control mb-2" id="service" list="datalistOptions" name="service_type" placeholder="Type to search...">
            <datalist id="datalistOptions">
                <option value="Software Development">
                    <option value="Network Security">
                        <option value="Cloud Solutions">
                            <option value="Data Management">
                                <option value="IT Consulting">
                                    <option value="System Integration">
                                        <option value="Web Development">
                                            <option value="IT Support">
            </datalist>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;">Message</label>
            <textarea class="form-control" name="message" rows="3" placeholder="Explain your needs or problems"></textarea>
        </div>
        <button type="submit" class="btn btn-custom-darkpurple mt-2">Submit</button>
                                            
        </form>
        
    </div>
                    
@endsection