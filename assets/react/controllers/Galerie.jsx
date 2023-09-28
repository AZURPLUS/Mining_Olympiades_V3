import React, {useEffect} from 'react';

export default function () {
    useEffect(() => {
        const images = document.querySelectorAll('.photo');
        const modal = document.getElementById('modal');
        const modalImg = modal.querySelector('img');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const closeBtn = document.getElementById('closeBtn');
        let currentIndex = 0;

        function openModal(index) {
            modal.style.display = 'flex';
            modalImg.src = images[index].src;
            currentIndex = index;
        }

        images.forEach((image, index) => {
            image.addEventListener('click', () => {
                openModal(index);

            });
        });

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            modalImg.src = images[currentIndex].src;
        });

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % images.length;
            modalImg.src = images[currentIndex].src;
        });

        modal.addEventListener('click', (e) => {
            if (e.target.id === 'modal') {
                modal.style.display = 'none';
            }
        })

        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });
    })
    return (
        <div>
            <section id="media">
                <div class="container">
                    <div class="galerie">
                        <img src="/assets/images/photos/01.jpg" alt="" class="photo"/>
                            <img src="/assets/images/photos/02.jpg" alt="" class="photo"/>
                                <img src="/assets/images/photos/03.jpg" alt="" class="photo"/>
                                    <img src="/assets/images/photos/04.jpg" alt="" class="photo"/>
                                        <img src="/assets/images/photos/05.jpg" alt="" class="photo"/>
                                            <img src="/assets/images/photos/06.jpg" alt="" class="photo"/>
                    </div>
                    <div class="modal" id="modal">
                        <div class="modal-nav">
                            <button id="prevBtn">&lt;</button>
                            <img src="" alt="Image Zoom"/>
                                <button id="nextBtn">&gt;</button>
                        </div>
                        <buton id="closeBtn">&times;</buton>
                    </div>

                </div>
            </section>
        </div>
    )
}