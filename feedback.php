<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup.Guru | Customer Feedback</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primaryDark: '#111827',
                        primaryAccent: '#7C3AED',
                        secondaryAccent: '#8B5CF6',
                        darkBg: '#030712',
                        lightText: '#E5E7EB',
                        lighterText: '#F3F4F6',
                        formBg: '#1F2937',
                        highlight: '#8B5CF6',
                        buttonGradientFrom: '#6366F1',
                        buttonGradientTo: '#EC4899',
                    },
                    animation: {
                        rotate: 'rotate 20s linear infinite',
                    },
                    keyframes: {
                        rotate: {
                            '0%': { transform: 'rotate(0deg)' },
                            '100%': { transform: 'rotate(360deg)' },
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .gradient-bg {
                background: linear-gradient(135deg, #111827 0%, #7C3AED 100%);
            }
            .button-gradient {
                background: linear-gradient(135deg, #6366F1 0%, #EC4899 100%);
            }
            .radial-bg::before {
                content: "";
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(139, 92, 246, 0.1) 0%, transparent 70%);
                animation: rotate 20s linear infinite;
                z-index: 0;
            }
            .button-hover-effect::after {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
                transition: 0.5s;
            }
            .button-hover-effect:hover::after {
                left: 100%;
            }
            .select-arrow {
                background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%238B5CF6'%3e%3cpath d='M7 10l5 5 5-5z'/%3e%3c/svg%3e");
                background-repeat: no-repeat;
                background-position: right 16px center;
                background-size: 18px;
            }
        }
    </style>
</head>
<body class="bg-darkBg font-['Poppins','Segoe_UI',sans-serif] text-lightText leading-relaxed m-0 p-0">
    <div class="max-w-2xl mx-auto my-10 bg-primaryDark rounded-xl shadow-2xl overflow-hidden border border-opacity-10 border-highlight">
        <div class="gradient-bg text-white py-10 px-8 text-center relative overflow-hidden">
            <div class="radial-bg"></div>
            <div class="relative z-10">
                <h1 class="text-3xl font-bold m-0">Help Us Improve <span class="font-extrabold text-highlight tracking-tight">Startup.Guru</span></h1>
                <p class="mt-3 opacity-90 font-light text-lg">Your feedback shapes our future. Share your experience with us.</p>
            </div>
        </div>
        
        <form class="grid grid-cols-2 gap-6 p-10">
            <div class="mb-6 relative col-span-2 md:col-span-1">
                <label class="block mb-2 font-medium text-lighterText text-sm">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required 
                    class="w-full px-4 py-3 bg-formBg border border-opacity-10 border-highlight rounded-md font-sans text-base transition-all duration-300 text-lightText focus:border-highlight focus:outline-none focus:ring-2 focus:ring-opacity-20 focus:ring-highlight">
            </div>
            
            <div class="mb-6 relative col-span-2 md:col-span-1">
                <label class="block mb-2 font-medium text-lighterText text-sm">Email Address</label>
                <input type="email" id="email" name="email" placeholder="your@email.com" required 
                    class="w-full px-4 py-3 bg-formBg border border-opacity-10 border-highlight rounded-md font-sans text-base transition-all duration-300 text-lightText focus:border-highlight focus:outline-none focus:ring-2 focus:ring-opacity-20 focus:ring-highlight">
            </div>
            
            <div class="mb-6 relative col-span-2">
                <label class="block mb-2 font-medium text-lighterText text-sm">How would you rate your experience with Startup.Guru?</label>
                <div class="flex justify-between mt-4">
                    <label class="rating-option text-center cursor-pointer flex-1 max-w-[60px]">
                        <input type="radio" name="rating" value="1" class="hidden" required>
                        <div class="rating-circle w-12 h-12 rounded-full bg-formBg flex items-center justify-center mx-auto mb-2 transition-all duration-300 border border-opacity-20 border-highlight font-semibold hover:bg-primaryAccent hover:text-white hover:border-primaryAccent hover:-translate-y-1 peer-checked:bg-primaryAccent peer-checked:text-white peer-checked:border-primaryAccent peer-checked:-translate-y-1">1</div>
                        <div class="rating-labels text-xs text-lightText opacity-80">Poor</div>
                    </label>
                    <label class="rating-option text-center cursor-pointer flex-1 max-w-[60px]">
                        <input type="radio" name="rating" value="2" class="hidden">
                        <div class="rating-circle w-12 h-12 rounded-full bg-formBg flex items-center justify-center mx-auto mb-2 transition-all duration-300 border border-opacity-20 border-highlight font-semibold hover:bg-primaryAccent hover:text-white hover:border-primaryAccent hover:-translate-y-1 peer-checked:bg-primaryAccent peer-checked:text-white peer-checked:border-primaryAccent peer-checked:-translate-y-1">2</div>
                        <div class="rating-labels text-xs text-lightText opacity-80">Fair</div>
                    </label>
                    <label class="rating-option text-center cursor-pointer flex-1 max-w-[60px]">
                        <input type="radio" name="rating" value="3" class="hidden">
                        <div class="rating-circle w-12 h-12 rounded-full bg-formBg flex items-center justify-center mx-auto mb-2 transition-all duration-300 border border-opacity-20 border-highlight font-semibold hover:bg-primaryAccent hover:text-white hover:border-primaryAccent hover:-translate-y-1 peer-checked:bg-primaryAccent peer-checked:text-white peer-checked:border-primaryAccent peer-checked:-translate-y-1">3</div>
                        <div class="rating-labels text-xs text-lightText opacity-80">Good</div>
                    </label>
                    <label class="rating-option text-center cursor-pointer flex-1 max-w-[60px]">
                        <input type="radio" name="rating" value="4" class="hidden">
                        <div class="rating-circle w-12 h-12 rounded-full bg-formBg flex items-center justify-center mx-auto mb-2 transition-all duration-300 border border-opacity-20 border-highlight font-semibold hover:bg-primaryAccent hover:text-white hover:border-primaryAccent hover:-translate-y-1 peer-checked:bg-primaryAccent peer-checked:text-white peer-checked:border-primaryAccent peer-checked:-translate-y-1">4</div>
                        <div class="rating-labels text-xs text-lightText opacity-80">Great</div>
                    </label>
                    <label class="rating-option text-center cursor-pointer flex-1 max-w-[60px]">
                        <input type="radio" name="rating" value="5" class="hidden">
                        <div class="rating-circle w-12 h-12 rounded-full bg-formBg flex items-center justify-center mx-auto mb-2 transition-all duration-300 border border-opacity-20 border-highlight font-semibold hover:bg-primaryAccent hover:text-white hover:border-primaryAccent hover:-translate-y-1 peer-checked:bg-primaryAccent peer-checked:text-white peer-checked:border-primaryAccent peer-checked:-translate-y-1">5</div>
                        <div class="rating-labels text-xs text-lightText opacity-80">Excellent</div>
                    </label>
                </div>
            </div>
            
            <div class="mb-6 relative col-span-2 md:col-span-1">
                <label class="block mb-2 font-medium text-lighterText text-sm">Which service did you use?</label>
                <select id="product" name="product" required 
                    class="w-full px-4 py-3 bg-formBg border border-opacity-10 border-highlight rounded-md font-sans text-base transition-all duration-300 text-lightText focus:border-highlight focus:outline-none focus:ring-2 focus:ring-opacity-20 focus:ring-highlight select-arrow appearance-none">
                    <option value="" disabled selected>Select service</option>
                    <option value="consulting">Startup Consulting</option>
                    <option value="funding">Funding Assistance</option>
                    <option value="mentorship">Founder Mentorship</option>
                    <option value="workshops">Growth Workshops</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <div class="mb-6 relative col-span-2 md:col-span-1">
                <label class="block mb-2 font-medium text-lighterText text-sm">Engagement Frequency</label>
                <select id="frequency" name="frequency" required 
                    class="w-full px-4 py-3 bg-formBg border border-opacity-10 border-highlight rounded-md font-sans text-base transition-all duration-300 text-lightText focus:border-highlight focus:outline-none focus:ring-2 focus:ring-opacity-20 focus:ring-highlight select-arrow appearance-none">
                    <option value="" disabled selected>Select frequency</option>
                    <option value="daily">Daily/Weekly</option>
                    <option value="monthly">Monthly</option>
                    <option value="quarterly">Quarterly</option>
                    <option value="once">One-time</option>
                </select>
            </div>
            
            <div class="mb-6 relative col-span-2">
                <label class="block mb-2 font-medium text-lighterText text-sm">What's working well with Startup.Guru?</label>
                <textarea id="feedback" name="feedback" placeholder="Tell us what you love about our services..." 
                    class="w-full px-4 py-3 bg-formBg border border-opacity-10 border-highlight rounded-md font-sans text-base transition-all duration-300 text-lightText focus:border-highlight focus:outline-none focus:ring-2 focus:ring-opacity-20 focus:ring-highlight min-h-[140px] resize-y"></textarea>
            </div>
            
            <div class="mb-6 relative col-span-2">
                <label class="block mb-2 font-medium text-lighterText text-sm">Where can we improve?</label>
                <textarea id="suggestions" name="suggestions" placeholder="Your constructive feedback helps us grow..." 
                    class="w-full px-4 py-3 bg-formBg border border-opacity-10 border-highlight rounded-md font-sans text-base transition-all duration-300 text-lightText focus:border-highlight focus:outline-none focus:ring-2 focus:ring-opacity-20 focus:ring-highlight min-h-[140px] resize-y"></textarea>
            </div>
            
            <button type="submit" class="button-gradient text-white border-none px-8 py-4 rounded-md text-base font-semibold cursor-pointer transition-all duration-300 block w-56 mx-auto mt-8 uppercase tracking-wider relative overflow-hidden button-hover-effect hover:-translate-y-0.5 hover:shadow-lg col-span-2">
                Submit Feedback
            </button>
        </form>
        
        <div class="text-center py-6 text-opacity-60 text-lightText text-sm border-t border-opacity-10 border-highlight">
            Your insights drive innovation. © 2023 <strong>Startup.Guru</strong>. All rights reserved.
        </div>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const formData = new FormData(e.target);
            const data = Object.fromEntries(formData.entries());

            try {
                const response = await fetch('/api/feedback', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(data)
                });

                if (response.ok) {
                    window.location.href = '/thank-you.html';
                }
            } catch (error) {
                console.error('Submission error:', error);
            }
        });

        // For appointment booking
        async function bookAppointment(appointmentData) {
            const response = await fetch('/api/appointments', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(appointmentData)
            });
            return await response.json();
        }
    </script>
</body>
</html>