<?php require 'top.php'?>
<style>
.about-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 40px 20px;
    background: #ffffff;
    font-family: Arial, sans-serif;
}

.hero-section {
    /* text-align: center; */
    margin-bottom: 50px;
    padding: 40px 20px;
    background: linear-gradient(to bottom, #f8f9fa, #ffffff);
    border-radius: 12px;
}

.content-section {
    margin-bottom: 40px;
    padding: 30px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease;
}

.content-section:hover {
    transform: translateY(-5px);
}

.brand-name {
    font-weight: bold;
}

.brand-i {
    color: #25d366;
}

h1 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 30px;
}

h3 {
    color: #333;
    font-size: 1.5rem;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid #f0f0f0;
}

p {
    color: #666;
    line-height: 1.8;
    margin-bottom: 20px;
    font-size: 1.1rem;
}

.cta-section {
    background: #e8f5e9;
    border-radius: 12px;
    padding: 40px;
    text-align: center;
    margin-top: 50px;
}

.cta-button {
    background: #25d366;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background: #1fab54;
}

@media (max-width: 768px) {
    .about-container {
        padding: 20px 15px;
    }

    .hero-section {
        padding: 30px 15px;
    }

    .content-section {
        padding: 20px;
        margin-bottom: 30px;
    }

    h1 {
        font-size: 2rem;
    }

    h3 {
        font-size: 1.3rem;
    }

    p {
        font-size: 1rem;
    }

    .cta-section {
        padding: 30px 20px;
    }
}
</style>

<div class="about-container">
    <p class="d-none">WhatsApp Business Solutions</p>
    <p class="d-none">Learn how iWAC India is transforming Indian businesses with automated Whatsapp based chat solutions for healthcare, entertainment, tourism, and real estate sectors.</p>

    <!-- Hero Section -->
    <div class="hero-section" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
        <!-- <h1>About <span class="brand-name"><span class="brand-i">i</span>Wac.ai</span></h1> -->
        <h1>About <span class="brand-name"><span class="brand-i">i</span>Wac.ai</span> India: </h1>
        <h2 style="font-size:1.7rem; " class="mb-2">Innovating & Automating Business Communication with Whatsapp Chat Solutions</h2>
        <p>
            <span class="brand-name"><span class="brand-i">i</span>Wac.ai</span> is a groundbreaking product of IICL, a
            global leader in digital transformation with over two decades of experience in delivering innovative IT
            services to businesses worldwide. As the latest offering from a company with a rich legacy, <span
                class="brand-name"><span class="brand-i">i</span>Wac.ai</span> is designed to empower businesses of all
            sizes with unparalleled booking, scheduling, and e-commerce solutions, all within the ease and familiarity
            of WhatsApp.
        </p>
    </div>

    <!-- Content Sections -->
    <div class="content-section" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
        <h3>Backed by Leadership Excellence</h3>
        <p>
            <span class="brand-name"><span class="brand-i">i</span>Wac.ai</span> is fueled by the vision and expertise
            of IICL's leadership team, which brings over 25 years of industry experience across diverse IT domains.
            Known for driving innovation and pushing boundaries, our leadership is committed to setting new standards in
            digital solutions, with a focus on transformative technologies like scalable Enterprise AI, Web 3.0, and
            trusted IT deployments.
        </p>
    </div>

    <div class="content-section" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
        <h3>Comprehensive IT Services and Excellence</h3>
        <p>
            <span class="brand-name"><span class="brand-i">i</span>Wac.ai</span> benefits from the robust IT
            infrastructure of IICL, which spans software development, cloud computing, cybersecurity, and more. Every
            aspect of iWac.ai is shaped by our dedication to excellence, customer satisfaction, and attention to detail,
            attributes that have earned IICL a respected place in the industry.
        </p>
    </div>

    <div class="content-section" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
        <h3>Global Reach, Local Relevance</h3>
        <p>
            IICL, headquartered in North Carolina, USA, with a Center of Excellence for Engineering in Telangana, India,
            serves over a million enterprises globally, including more than 120,000 businesses that rely on our tailored
            digital solutions. Recognized by the World Business Forums, IICL and <span class="brand-name"><span
                    class="brand-i">i</span>Wac.ai</span> are committed to making a meaningful impact on businesses and
            communities worldwide.
        </p>
    </div>

    <div class="content-section" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
        <h3>Future-ready Innovation</h3>
        <p>
            Through <span class="brand-name"><span class="brand-i">i</span>Wac.ai</span>, we continue our tradition of
            staying ahead in the rapidly evolving technology landscape. Our teams of IT specialists receive continuous
            training to stay current with the latest industry trends, ensuring that every product, including <span
                class="brand-name"><span class="brand-i">i</span>Wac.ai</span>, remains a robust and forward-thinking
            solution for our clients.
        </p>
    </div>

    <!-- CTA Section -->
    <div class="cta-section" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
        <h3>Partner with iWac.ai for Digital Transformation</h3>
        <p>
            Ready to elevate your business with simple, effective, and innovative digital interactions that connect you
            to your customers in powerful ways?
        </p>
        <button class="cta-button">Contact Us Today</button>
    </div>
</div>
<?php require 'footer.php'?>