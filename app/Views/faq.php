<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<section class="section faq">
      <div class="row">
        <div class="col-lg-6">

          <div class="card basic">
            <div class="card-body">
              <h5 class="card-title">Basic Questions</h5>

              <div>
                <h6>1. Apakah mencabut gigi sakit?</h6>
                <p>Prosedur pencabutan gigi dilakukan dengan bius lokal, jadi tidak akan terasa sakit. Setelah bius hilang, Anda mungkin merasakan sedikit nyeri yang bisa diatasi dengan obat penghilang rasa sakit.</p>
              </div>

              <div class="pt-2">
                <h6>2. Kenapa gigi saya ngilu saat makan/minum dingin atau manis?</h6>
                <p>Ngilu biasanya disebabkan oleh gigi sensitif, lapisan email yang menipis, atau adanya lubang kecil pada gigi. Disarankan untuk menggunakan pasta gigi khusus gigi sensitif</p>
              </div>

              <div class="pt-2">
                <h6>3. Apakah pembersihan karang gigi menyakitkan?</h6>
                <p>Tidak, namun mungkin terasa sedikit tidak nyaman. Proses ini cepat dan membantu mencegah penyakit gusi dan gigi berlubang.</p>
              </div>

            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <!-- F.A.Q Group 2 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Orang lain juga bertanya</h5>

              <div class="accordion accordion-flush" id="faq-group-2">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-1" type="button" data-bs-toggle="collapse">
                    Apakah tambal gigi bisa bertahan lama??
                    </button>
                  </h2>
                  <div id="faqsTwo-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                    Ya, tambalan bisa bertahan lama tergantung dari jenis bahan tambal, perawatan, dan kondisi gigi. Tambalan resin biasanya bertahan 5–7 tahun, sementara tambalan logam bisa lebih lama.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-2" type="button" data-bs-toggle="collapse">
                    Apakah pembersihan karang gigi menyakitkan?
                    </button>
                  </h2>
                  <div id="faqsTwo-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                    Tidak, namun mungkin terasa sedikit tidak nyaman. Proses ini cepat dan membantu mencegah penyakit gusi dan gigi berlubang.
                </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-target="#faqsTwo-3" type="button" data-bs-toggle="collapse">
                    Bagaimana cara menjaga agar tidak bau mulut?
                    </button>
                  </h2>
                  <div id="faqsTwo-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
                    <div class="accordion-body">
                    Rajin menyikat gigi dua kali sehari, membersihkan lidah, menggunakan benang gigi, dan kontrol rutin ke dokter. Hindari makanan berbau tajam dan perbanyak minum air putih.  </div>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End F.A.Q Group 2 -->



        </div>

      </div>
    </section>
    <?= $this->endSection() ?>