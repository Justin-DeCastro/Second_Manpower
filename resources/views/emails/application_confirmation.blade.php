@component('mail::message')
# Interview Approval

Dear {{ $application->full_name }},

Your application for the position of {{ $application->job_name }} in the category {{ $application->job_category }} has been approved for an interview.

Please find attached the details for your interview appointment.

Thank you.

Regards,<br>
{{ config('app.name') }}
@endcomponent
