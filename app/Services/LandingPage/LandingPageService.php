<?php

namespace App\Services\LandingPage;

use App\Services\LandingPage\Contracts\LandingPageServiceContract;

class LandingPageService implements LandingPageServiceContract
{
    public function home(): array
    {
        $navLinks = [
            ['label' => 'Features', 'url' => '#features'],
            ['label' => 'Pricing', 'url' => '#pricing'],
            ['label' => 'Testimonials', 'url' => '#testimonials'],
            ['label' => 'Contact', 'url' => '#contact'],
        ];

        $features = [
            ["title" => "Intuitive Interface", "text" => "Clean, modern, and easy to use, making task management a breeze."],
            ["title" => "Cross-Platform Sync", "text" => "Stay synchronized across all your devices, seamlessly."],
            ["title" => "Customizable Lists", "text" => "Create lists that adapt to your unique workflow."],
            ["title" => "Smart Reminders", "text" => "Intelligent reminders to keep you on schedule."],
            ["title" => "Collaborative Tools", "text" => "Teamwork made easy with integrated collaboration features."],
            ["title" => "Dark Mode", "text" => "Comfortable on the eyes, day or night."],
        ];

        $pricingPlans = [
            [
                "name" => "Basic",
                "price" => "Free",
                "features" => [
                    "Up to 5 lists",
                    "100 todos per list",
                    "Basic features"
                ],
                "button" => "Get Started"
            ],
            [
                "name" => "Pro",
                "price" => "$9.99/month",
                "features" => [
                    "Unlimited lists",
                    "Unlimited todos",
                    "All features",
                    "Priority support"
                ],
                "button" => "Upgrade to Pro"
            ],
            [
                "name" => "Team",
                "price" => "$29.99/month",
                "features" => [
                    "Up to 5 team members",
                    "Unlimited lists",
                    "Unlimited todos",
                    "All features",
                    "Team collaboration tools"
                ],
                "button" => "Get Started"
            ]
        ];

        $contactFields = [
            [
                "name" => "name",
                "label" => "Name",
                "placeholder" => "Your Name",
                "type" => "text"
            ],
            [
                "name" => "email",
                "label" => "Email",
                "placeholder" => "Your Email",
                "type" => "email"
            ],
            [
                "name" => "message",
                "label" => "Message",
                "placeholder" => "Your Message",
                "type" => "textarea"
            ]
        ];

        return [
            "navLinks" => $navLinks,
            "features" => $features,
            "pricingPlans" => $pricingPlans,
            "contactFields" => $contactFields
        ];
    }

    public function Login(): array
    {
        $loginFields = [
            [
                "name" => "email",
                "label" => "Email",
                "placeholder" => "Email Address",
                "type" => "text"
            ],
            [
                "name" => "password",
                "label" => "Password",
                "placeholder" => "Password",
                "type" => "password"
            ],
        ];
        return [ "loginFields" => $loginFields ];
    }

    public function register(): array
    {
        $registerFields = [
            [
                "name" => "name",
                "label" => "Name",
                "placeholder" => "Enter your name",
                "type" => "text"
            ],
            [
                "name" => "email",
                "label" => "Email",
                "placeholder" => "Email Address",
                "type" => "text"
            ],
            [
                "name" => "password",
                "label" => "Password",
                "placeholder" => "Password",
                "type" => "password"
            ],
            [
                "name" => "cpassword",
                "label" => "Confirm Password",
                "placeholder" => "Confirm Password",
                "type" => "password"
            ],
        ];
        return [ "registerFields" => $registerFields ];
    }
}
