@extends('Layout.LayHome')

@section('content')
<section class="page-saction" id="tugas">
    <div class="Container">
        <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Bagian TIK</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Bagian Persandian</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Bagian Sekretariat</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Bagian Komuniskasi</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">ini Home Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quae cum provident distinctio quos dolor eveniet totam corrupti, quod incidunt? Asperiores, soluta. Id pariatur ab asperiores quo debitis facilis numquam?</div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">ini profile Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum iusto libero, ea eius pariatur, assumenda aspernatur eveniet odit autem similique ipsum explicabo fuga delectus id veritatis. Doloribus laudantium doloremque molestiae.</div>

                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="content">
                            <div class="text-center mb-40">
                                <h2 class="section-title">SEKRETARIAT</h2>
                            </div>
                            <p></p>
                            <h3>TUGAS POKOK</h3>
                            <p>Menyelenggarakan kesekretariatan di lingkungan Dinas.</p>
                            <h3>FUNGSI</h3>
                            <ol>
                                <li>penyusunan Rencana Strategis, Rencana Kerja dan Rencana Kerja dan Anggaran Dinas sesuai dengan lingkup tugasnya;</li>
                                <li>pengoordinasian penyusunan Rencana Strategis, Rencana Kerja dan Rencana Kerja dan Anggaran Dinas;</li>
                                <li>pelaksanaan Dokumen Pelaksanaan Anggaran Dinas sesuai dengan lingkup tugasnya;</li>
                                <li>pengoordinasian pelaksanaan Dokumen Pelaksanaan Anggaran Dinas;</li>
                                <li>perumusan kebijakan, proses bisnis, standar dan prosedur Dinas sesuai dengan lingkup tugasnya;</li>
                                <li>pengoordinasian perumusan kebijakan, proses bisnis, standar dan prosedur Dinas;</li>
                                <li>pelaksanaan kebijakan, proses bisnis, standar dan prosedur Dinas sesuai dengan lingkup tugasnya;</li>
                                <li>pengelolaan kepegawaian, keuangan dan barang milik daerah Dinas;</li>
                                <li>pengelolaan kerumahtanggaan, ketatalaksanaan, ketatausahaan, kearsipan dan kehumasan Dinas;</li>
                                <li>pengelolaan data dan sistem informasi Dinas;</li>
                                <li>pelaksanaan fasilitasi dukungan administratif, keuangan dan tata kelola komisi informasi Provinsi DKI Jakarta;</li>
                                <li>pengoordinasian tindak lanjut hasil pemeriksaan dan pengawasan BPK dan Aparat Pemeriksa Intern Pemerintah (APIP);</li>
                                <li>pelaksanaan koordinasi, pemantauan, evaluasi, pelaporan, dan pertanggungjawaban pelaksanaan tugas Dinas sesuai dengan lingkup tugasnya;</li>
                                <li>pengoordinasian pelaksanaan koordinasi, pernantauan, evaluasi, pelaporan dan pertanggungjawaban pelaksanaan tugas Dinas; dan</li>
                                <li>pelaksanaan tugas kedinasan lain yang diberikan oleh Kepala Dinas.</li>
                            </ol>
                            <h3>SEKRETARIAT TERDIRI DARI 4 (TIGA) SUB BAGIAN :</h3>
                            <ol>
                                <li><strong>Subbagian Umum</strong><br>Merupakan Satuan Kerja Sekretariat dalam mengelola barang milik daerah Dinas; &nbsp;mengelola kerumahtanggaan, ketatalaksanaan, kearsipan dan kehumasan Dinas; melaksanakan fasilitasi dukungan administratif, keuangan dan tata kelola komisi informasi Provinsi DKI Jakarta;</li>
                            </ol>
                            <ol start="2">
                                <li><strong>Subbagian Kepegawaian</strong><br>Merupakan Satuan Kerja Sekretariat dalam melaksanakan pengelolaan kepegawaian Dinas Kominfo dan Statistik;</li>
                            </ol>
                            <ol start="3">
                                <li><strong>Subbagian Program dan Pelaporan</strong><br>Merupakan Satuan Kerja Sekretariat dalam mengoordinasikan pengelolaan dan pelaporan kinerja Dinas; mengelola dan mengembangkan data dan sistem informasi Dinas; dan mengoordinasikan tindak lanjut hasil pemeriksaan dan pengawasan BPK dan Aparat Pemeriksa Intern Pemerintah (APIP);&nbsp;</li>
                            </ol>
                            <ol start="4">
                                <li><strong>Subbagian Keuangan</strong><br>Merupakan Satuan Kerja Sekretariat dalam&nbsp; melaksanakan pengelolaan keuangan Dinas;</li>
                            </ol>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">ini setting Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Enim ab corrupti ipsa accusamus
                        optio hic voluptates reprehenderit. Eos incidunt id aliquam recusandae, vero beatae possimus eligendi asperiores ad reprehenderit alias
                        ? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem animi voluptate at corporis voluptates hic dolorum veniam molestias! Distinctio quam aliquam maiores officia nam nihil consectetur in beatae, alias corrupti.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem eos reiciendis ab sit iste maiores nulla optio veritatis sapiente nostrum consequuntur laudantium vitae facilis, fuga itaque tempore harum quidem aliquid?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, at corrupti ipsum facere, molestias dolore sequi cupiditate in est et incidunt recusandae placeat quis hic. Unde excepturi officia fugiat cum?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores consectetur atque magni, debitis dolores voluptatum, assumenda dolorem sunt aspernatur illo nobis corrupti porro ea obcaecati. Vero quasi esse neque dolorem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quam perferendis quidem ipsum eaque qui autem ipsa error quas cumque pariatur labore commodi repudiandae earum ratione, molestias iure distinctio dolores</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection