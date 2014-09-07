#!/usr/bin/python

# Keyjam Tester - test for keyjamming
# Copyright 2012 Julian Marchant <onpon4@gmail.com>
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

"""Simple tool to test for keyjamming."""

from __future__ import print_function

__version__ = "1.0"

import pygame
from pygame.locals import *

SCREENRECT = Rect(0, 0, 320, 240)


def main():
    pygame.init()

    window = pygame.display.set_mode(SCREENRECT.size)
    background = pygame.Surface(SCREENRECT.size).convert()
    clock = pygame.time.Clock()
    font = pygame.font.SysFont('Monospace,Courier,Liberation Mono', 10)

    pygame.display.set_caption('Keyjam Tester')

    keystatus = {}
    running = True
    while running:
        window.blit(background, (0, 0))
        # Events
        for event in pygame.event.get():
            if (event.type == QUIT or
                    (event.type == KEYDOWN and event.key == K_ESCAPE)):
                running = False
            elif event.type == KEYDOWN:
                keystatus[event.key] = True
            elif event.type == KEYUP:
                keystatus[event.key] = False

        split_keytext = []
        for k in keystatus.keys():
            if keystatus[k]:
                split_keytext.append(str(k))

        keytext = ' | '.join(split_keytext)
        if font.size(keytext)[0] > SCREENRECT.width:
            lines = []
            while split_keytext:
                keytext = ''
                i = 0
                while font.size(keytext)[0] < SCREENRECT.width:
                    i += 1
                    if i > len(split_keytext):
                        break
                    keytext = ' | '.join(split_keytext[:i])
                else:
                    # Means text became too long
                    i -= 1
                    keytext = ' | '.join(split_keytext[:i])
                lines.append(keytext)
                del split_keytext[:i]
        else:
            lines = [keytext]

        for i in xrange(len(lines)):
            image = font.render(lines[i], True, (255, 255, 255))
            window.blit(image, (0, i * font.get_linesize()))
        
        pygame.display.update()

if __name__ == '__main__':
    main()
