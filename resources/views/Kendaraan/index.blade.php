<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Service App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#0f172a;
            font-family:'Poppins',sans-serif;
            color:white;
        }

        .hero{
            padding:40px 0;
        }

        .title{
            font-size:40px;
            font-weight:700;
        }

        .subtitle{
            color:#cbd5e1;
        }

        .card-custom{
            background:#1e293b;
            border-radius:25px;
            padding:30px;
            box-shadow:0 10px 25px rgba(0,0,0,0.3);
        }

        .table{
            color:white;
        }

        .table thead{
            background:#3b82f6;
        }

        .table tbody tr{
            background:#334155;
        }

        .table tbody tr:hover{
            background:#475569;
        }

        .btn-add{
            background:#22c55e;
            color:white;
            border:none;
            border-radius:12px;
            padding:10px 18px;
            font-weight:600;
        }

        .btn-edit{
            background:#f59e0b;
            border:none;
            color:white;
            border-radius:10px;
        }

        .btn-delete{
            background:#ef4444;
            border:none;
            color:white;
            border-radius:10px;
        }

        .badge-status{
            background:#22c55e;
            padding:6px 12px;
            border-radius:20px;
            font-size:12px;
        }

        .footer{
            margin-top:20px;
            text-align:center;
            color:#94a3b8;
        }
    </style>
</head>

<body>

    <div class="container hero">

        <div class="mb-4">
            <h1 class="title">
                🚘 Sistem E-Bengkel 4SIA
            </h1>

            <p class="subtitle">
                Sistem pendataan kendaraan servis bengkel modern
            </p>
        </div>

        <div class="card-custom">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>
                    <h3>Data Kendaraan Servis</h3>
                </div>

                <a href="/kendaraan/create" class="btn btn-add">
                    + Tambah Kendaraan
                </a>

            </div>

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Plat</th>
                            <th>Pemilik</th>
                            <th>Kendaraan</th>
                            <th>Keluhan</th>
                            <th>Status</th>
                            
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($data as $item)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>
                                <strong>{{ $item->plat_nomor }}</strong>
                            </td>

                            <td>{{ $item->nama_pemilik }}</td>

                            <td>{{ $item->merk_kendaraan }}</td>

                            <td>{{ $item->keluhan }}</td>

                            <td>
                                <span class="badge-status">
                                    Diproses
                                </span>
                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="7" class="text-center">
                                Tidak ada data kendaraan
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

        <div class="footer">
            Dibuat oleh Eukharistia Manurung • 224520026
        </div>

    </div>

</body>

</html>