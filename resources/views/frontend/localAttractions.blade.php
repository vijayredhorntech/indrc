@extends('frontend.layouts.layout')
@section('content')
    <div class="swiffy-slider slider-nav-autoplay slider-nav-animation slider-nav-animation-fadein">
        <ul class="slider-container" style="width: 100%">
            <li style="display: flex; justify-content: center; background-color: black; height: max-content"><img src="{{asset('assets/front/images/localAttractions/1.png')}}" class="MainBannerImages"></li>
            <li style="display: flex; justify-content: center; background-color: black; height: max-content"><img src="{{asset('assets/front/images/localAttractions/2.png')}}" class="MainBannerImages"></li>
            <li style="display: flex; justify-content: center; background-color: black; height: max-content"><img src="{{asset('assets/front/images/localAttractions/3.png')}}" class="MainBannerImages"></li>
        </ul>

                <button type="button" class="slider-nav"></button>
                <button type="button" class="slider-nav slider-nav-next"></button>
    </div>



    <section class="about-section-two" style="padding-bottom: 0px; padding-top: 50px">
        <div class="auto-container">
            <div class="row">

                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Local attractions near IISER Mohali</h2>
                            <span class="divider"></span>

                            <div class="text"><strong>IISER Mohali</strong> is located in the vibrant city of Mohali, nestled in the foothills of the Shivalik range. The campus enjoys proximity to several local attractions that offer a rich blend of natural beauty and historical significance.</div>

                            <h3 style="margin-top: 20px">Fateh Burj (Chappar Chiri):</h3>
                            <div class="text" style="margin-top: 10px">Fatеh Burj, known as thе “Towеr of Victory”. It is a tеstamеnt to thе bravеry of thе Sikh warriors. It stands at a distance of approximately 8 km from the IISER Mohali campus making it a quick and accessible drive or auto-rickshaw ride.</div>

                            <h3 style="margin-top: 20px">Rock Garden, Chandigarh:</h3>
                            <div class="text" style="margin-top: 10px">A visionary sculpture park created by Nek Chand using recycled materials like bangles, tiles, ceramic pots, and industrial waste. Visitors wander through landscaped courtyards, cascading waterfalls, and unique mosaic sculptures spread across over 40 acres. Open daily from approximately 9AM to early evening, it's ideal for art lovers and photographers alike. Located in Sector 1, Chandigarh, the Rock Garden lies approximately <strong>14–15 km</strong> from the <strong>IISER Mohali</strong> campus.</div>

                            <h3 style="margin-top: 20px">Sukhna Lake and Bird Sanctuary:</h3>
                            <div class="text" style="margin-top: 10px">Located about <strong> 14–16km</strong> from IISER Mohali, Sukhna Lake and the adjoining bird park offers a peaceful escape into nature right at the edge of Chandigarh. The man-made lake is a popular spot for morning walks, paddle boating, birdwatching, and enjoying panoramic views of the Shivalik hills. Adjacent to it lies the <strong>Chandigarh Bird Park</strong> which is a popular attraction in the city. The park covers an area of over 27 acres and is home to a wide variety of birds, including flamingos, pelicans, parakeets, and peacocks.</div>

                            <h3 style="margin-top: 20px">Pinjore Gardens:</h3>
                            <div class="text" style="margin-top: 10px">Pinjore Garden, also known as Yadavindra Gardens, is a beautifully preserved 17th-century Mughal-style garden located in the town of Pinjore, Haryana. Spread across seven descending terraces, the garden features grand pavilions, water fountains, floral landscapes, and structures like the Shish Mahal and Rang Mahal that reflect classic Mughal architecture. Situated approximately <strong>35–40 km</strong> from IISER Mohali, it makes for a peaceful and historically rich day trip, taking around <strong>45 minutes to 1 hour</strong> by road.</div>

                            <h3 style="margin-top: 20px">The Golden Temple:</h3>
                            <div class="text" style="margin-top: 10px">The Golden Temple (Sri Harmandir Sahib) in Amritsar is one of Sikhism’s most revered spiritual landmarks, featuring a dazzling gold-plated sanctum reflected in the serene Amrit Sarovar, and surrounded by marble and pietra-dura motifs that showcase exquisite artistry. Located approximately <strong>220–225km</strong> from IISER Mohali, the journey typically takes around 4 hours by road, making it suitable for a well-planned day trip or overnight excursion.</div>

                            <h3 style="margin-top: 20px">Chhatbir Zoo:</h3>
                            <div class="text" style="margin-top: 10px">Chhatbir Zoo, officially known as Mahendra Chaudhary Zoological Park, is a popular wildlife destination located about <strong>16–20km</strong> from IISER Mohali, roughly a <strong> 30–40 minute</strong> drive. Spread over 200+ hectares, the zoo houses a wide range of animals including lions, tigers, elephants, and a large walk-in aviary with over 60 bird species. It also features a lion safari, reptile house, and children’s play areas—making it a great spot for nature lovers.</div>

                            <h3 style="margin-top: 20px">Morni Hills:</h3>
                            <div class="text" style="margin-top: 10px">Located about <strong>55–60km</strong> from IISER Mohali, Morni Hills is a peaceful getaway nestled in the Shivalik foothills. Situated at an altitude of around <strong>1,220 meters</strong>, it offers cool breezes, pine-covered slopes, and panoramic views. The area is known for its twin lakes—Tikkar Taal, historic Morni Fort, and a small adventure park with zip-lining and rope bridges. Rich in birdlife and forest trails, Morni is ideal for nature walks, light trekking, and a quiet retreat from the bustle of city life.</div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
