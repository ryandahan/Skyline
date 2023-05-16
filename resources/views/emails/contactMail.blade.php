<x-mail::message>
    # You have a new Query

    **Name:** {{$contact->name ?? ""}}
    **Email:** {{$contact->email ?? ""}}
    **Subject:** {{$contact->subject ?? ""}}
    **Comment:** {{$contact->comment ?? ""}}


    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
