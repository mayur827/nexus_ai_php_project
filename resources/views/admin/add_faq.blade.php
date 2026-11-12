@extends('admin.layout.app')

@section('title', 'Add FAQ')

@section('content')

<h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Website / FAQ /</span>
            Add FAQ
        </h4>

<div class="card">

    <div class="card-header">
        <h5 class="mb-0">Add FAQ</h5>
    </div>

    <div class="card-body">

        <form
            action="{{ route('admin.faq.store') }}"
            method="POST"
        >

            @csrf

            <div class="row">

                {{-- Question --}}
                <div class="col-lg-12 mb-3">

                    <label class="form-label">
                        Question
                    </label>

                    <input
                        type="text"
                        name="question"
                        class="form-control"
                        placeholder="Enter question"
                        value="{{ old('question') }}"
                        required
                    >

                </div>


                {{-- Answer --}}
                <div class="col-lg-12 mb-3">

                    <label class="form-label">
                        Answer
                    </label>

                    <textarea
                        name="answer"
                        class="form-control"
                        rows="5"
                        placeholder="Enter answer"
                        required
                    >{{ old('answer') }}</textarea>

                </div>

            </div>


            <div class="mt-3">

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    <i class="bx bx-save"></i>
                    Save
                </button>


                <a
                    href="{{ route('admin.faq') }}"
                    class="btn btn-secondary"
                >
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

@endsection

