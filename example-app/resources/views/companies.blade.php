<!DO CTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <table>
            <thead>
                <tr>
                    <td>Company_id</td>
                    <td>Company_name</td>
                    <td>Company_web</td>
                    <td>Company_address</td>
                </tr>

            </thead>
            <tbody>
                @foreach($companies as $company):
                <tr>
                    <td> {!! $company->company_name !!}</td>
                    <td> {!! $company->company_id !!}</td>
                    <td> {!! $company->company_web !!}</td>
                    <td> {!! $company->company_address !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $companies->links() !!}
    </body>

    </html>
